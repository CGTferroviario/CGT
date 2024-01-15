<div>
    <form action="{{ route('search') }}" method="GET">
        <div class="flex space-x-4">
            <input type="text" name="search" placeholder="Buscar..." class="w-full form-input" />
            
            <select name="empresa" class="form-select">
                <option value="">Selecciona una empresa</option>
                <!-- Opciones de empresas -->
            </select>
    
            <select name="categoria" class="form-select">
                <option value="">Selecciona una categoría</option>
                <!-- Opciones de categorías -->
            </select>
    
            <!-- Etiquetas como checkboxes o un multiselect -->
            
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Buscar</button>
        </div>
    </form>
    
</div>