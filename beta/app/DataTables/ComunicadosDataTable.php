<?php

namespace App\DataTables;

use App\Models\Comunicado;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ComunicadosDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('user.nombre', function(Comunicado $comunicado) {
                return $comunicado->user->nombre; // Accessing the related model's attribute
            })
            ->addColumn('empresa.nombre', function(Comunicado $comunicado) {
                return $comunicado->empresa->nombre; // Accessing the related model's attribute
            })
            ->addColumn('categoria.nombre', function(Comunicado $comunicado) {
                return $comunicado->categoria->nombre; // Accessing the related model's attribute
            })
            ->addColumn('etiquetas', function(Comunicado $comunicado) {
                return $comunicado->etiquetas->map(function($etiqueta) {
                    return $etiqueta->nombre; // Assuming 'nombre' is the attribute you want to display
                })->implode(', ');
            })
            // Add other columns as needed
            ->addColumn('acciones', function(Comunicado $comunicado) {
                // Manually construct the URLs for the actions
                $editUrl = route('intranet.comunicados.edit', $comunicado->id);
                $destroyUrl = route('intranet.comunicados.destroy', $comunicado->id);
            
                // Construct the HTML content
                $html = '<div class="flex justify-start gap-1 text-xl mt-2">';
                $html .= '<a href="' . $editUrl . '" class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">';
                $html .= '<i class="lni lni-envelope"></i>';
                $html .= '</a>';
                $html .= '<a href="' . $editUrl . '" class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Comunicado">';
                $html .= '<i class="lni lni-pencil"></i>';
                $html .= '</a>';
                $html .= '<form method="POST" action="' . $destroyUrl . '" onsubmit="return confirm(\'¿Deseas eliminar este comunicado?\');">';
                $html .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                $html .= '<input type="hidden" name="_method" value="DELETE">';
                $html .= '<button type="submit" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8" title="Eliminar Comunicado">';
                $html .= '<i class="lni lni-trash-can"></i>';
                $html .= '</button>';
                $html .= '</form>';
                $html .= '</div>';
            
                return $html;
            })            
            // ->rawColumns(['acciones']) // Specify the column(s) that should render HTML
            ->addColumn('cuerpo', function(Comunicado $comunicado) {
                // Example of returning HTML content for the 'action' column
                return $comunicado->cuerpo;
            })
            ->rawColumns(['cuerpo', 'acciones']) // Specify the column(s) that should render HTML
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Comunicado $model): QueryBuilder
    {
        // return $model->newQuery();
        return $model->newQuery()->with('user', 'empresa', 'categoria', 'etiquetas' ); // Assuming 'user' is the relationship name
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('comunicadosTabla')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ])
                    ->parameters([
                        'language' => [
                            'url' => '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                        ],                        
                        'responsive' => true,
                        'autoWidth' => false
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('acciones')
                ->title('Acciones')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('fecha'),
            Column::make('user.nombre')->title('Usuario'), // Adjust the column name to match
            // Column::make('user.nombre'),
            Column::make('titulo'),
            Column::make('empresa.nombre')->title('Empresa'),
            Column::make('categoria.nombre')->title('Categoria'),
            Column::make('etiquetas')->title('Etiquetas'),
            Column::make('subtitulo'),
            Column::make('cuerpo'),
            Column::make('subtitulo'),
            Column::make('pdf'),
            Column::make('imagen'),
            Column::make('adjunto'),
            Column::make('visualizaciones'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Comunicados_' . date('YmdHis');
    }
}
