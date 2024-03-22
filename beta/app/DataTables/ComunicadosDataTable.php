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
     * Construimos la clase DataTables
     *
     * @param QueryBuilder $query Resultados del método query()
     * 
     * 
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('user.nombre', function(Comunicado $comunicado) {
                return $comunicado->user->nombre; // Accessing the related model attribute
            })
            ->addColumn('empresa.nombre', function(Comunicado $comunicado) {
                return $comunicado->empresa->nombre; // Accessing the related model attribute
            })
            ->addColumn('categoria.nombre', function(Comunicado $comunicado) {
                return $comunicado->categoria->nombre; // Accessing the related model attribute
            })
            ->addColumn('etiquetas', function(Comunicado $comunicado) {
                return $comunicado->etiquetas->map(function($etiqueta) {
                    return $etiqueta->nombre; // 'nombre' is the attribute you want to show
                })->implode(', ');
            })
            // Add other columns
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
            ->addColumn('cuerpo', function(Comunicado $comunicado) {
                return $comunicado->cuerpo;
            })
            ->editColumn('empresa', function ($comunicado) {
                // Construct the HTML content for the 'empresa' field
                $html = '<span class="px-3 py-1 text-sm font-semibold rounded-full bg-' . $comunicado->empresa->slug . '">' . $comunicado->empresa->slug . '</span>';
                return $html;
            })
            ->rawColumns(['cuerpo', 'acciones', 'empresa']) // Specify the columns that should render HTML
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
                    ->orderBy(2)
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
            Column::make('numero')->width('50')->title('Nº'),
            Column::computed('acciones')
                ->title('Acciones')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
            Column::make('fecha')->width('70'),
            Column::make('user.nombre')->title('Usuario')->width('auto'), // Adjust the column name to match
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
