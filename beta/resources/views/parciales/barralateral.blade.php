<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
    aria-controls="sidebar-multi-level-sidebar" type="button"
    class="inline-flex items-center absolute top-20 p-1 mt-2 ml-1 text-sm rounded-lg sm:hidden bg-black hover:bg-red-500 focus:outline-none focus:ring-1 text-red-500 hover:text-black border-2 border-red-500 hover:border-black focus:ring-red-500">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar"
    class="fixed top-20 left-0 z-40 sm:w-16 md:w-52 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 pt-5 sm:overflow-y-hidden md:overflow-y-auto bg-oscuro">
        <h1 class="text-white text-center sm:hidden md:block">ADMIN</h1>
        <ul class="space-y-2 font-medium mt-5">
            <li class="">
                <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-dashboard text-red-500 transition duration-75  group-hover:text-zinc-900 dark:group-hover:text-white" title="Panel de Control"></i> <span class="ml-3 sm:hidden md:flex">Panel de Control</span>
                </a>
            </li>
            <hr>
            <li class="">                   
                <a href="{{ route('intranet.comunicados.index') }}" :active="request()->routeIs('comunicados')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-bullhorn text-red-500 transition duration-75 group-hover:text-white" title="Comunicados"></i><span class="ml-3 sm:hidden md:flex">Comunicados</span>
                </a>
            </li>
            <li class="">                   
                <a href="{{ route('intranet.noticias.index') }}" :active="request()->routeIs('noticias')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-book text-red-500 transition duration-75 group-hover:text-white" title="Noticias"></i><span class="ml-3 sm:hidden md:flex">Noticias</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('intranet.documentos.index') }}" :active="request()->routeIs('documentos')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-files text-red-500 transition duration-75 group-hover:text-white" title="Documentos"></i> <span class="ml-3 sm:hidden md:flex">Documentos</span>
                </a>
            </li>
            <li class="">
                <a href="{{ url('intranet.archivos.index') }}" :active="request()->routeIs('archivos')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-archive text-red-500 transition duration-75 group-hover:text-white" title="Archivos"></i> <span class="ml-3 sm:hidden md:flex">Archivos</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.empresas.index') }}" :active="request()->routeIs('empresas')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-apartment text-red-500 transition duration-75 group-hover:text-white" title="Empresas"></i> <span class="ml-3 sm:hidden md:flex">Empresas</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.categorias.index') }}" :active="request()->routeIs('categorias')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-hammer text-red-500 transition duration-75 group-hover:text-white" title="Categorías"></i> <span class="ml-3 sm:hidden md:flex">Categorías</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.etiquetas.index') }}" :active="request()->routeIs('etiquetas')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-tag text-red-500 transition duration-75 group-hover:text-white" title="Etiquetas"></i> <span class="ml-3 sm:hidden md:flex">Etiquetas</span>
                </a>
            </li>
            <hr>
            <li class="">                    
                <a href="{{ route('intranet.equipos.index') }}" :active="request()->routeIs('equipos')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-briefcase-alt text-red-500 transition duration-75 group-hover:text-white" title="Equipo"></i> <span class="ml-3 sm:hidden md:flex">Equipo</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.seccions.index') }}" :active="request()->routeIs('seccions')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-map text-red-500 transition duration-75 group-hover:text-white" title="Secciones"></i> <span class="ml-3 sm:hidden md:flex">Secciones</span>
                </a>
            </li>
            <hr>
            <li class="">                    
                <a href="{{ route('intranet.roles.index') }}" :active="request()->routeIs('roles')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-support text-red-500 transition duration-75 group-hover:text-white" title="Roles"></i> <span class="ml-3 sm:hidden md:flex">Roles</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.permissions.index') }}" :active="request()->routeIs('permissions')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-license text-red-500 transition duration-75 group-hover:text-white" title="Permisos"></i> <span class="ml-3 sm:hidden md:flex">Permisos</span>
                </a>
            </li>
            <li class="">                    
                <a href="{{ route('intranet.usuarios.index') }}" :active="request()->routeIs('users')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-users text-red-500 transition duration-75 group-hover:text-white" title="Usuarios"></i> <span class="ml-3 sm:hidden md:flex">Usuarios</span>
                </a>
            </li>
            
            <li class="">                    
                <a href="{{ route('intranet.afiliados.index') }}" :active="request()->routeIs('afiliados')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-consulting text-red-500 transition duration-75 group-hover:text-white" title="Afiliados"></i> <span class="ml-3 sm:hidden md:flex">Afiliados</span>
                </a>
            </li>            
            <hr>
            <li class="">                    
                <a href="{{ route('profile.edit') }}" :active="request()->routeIs('users')" class="flex items-center p-2 rounded-lg text-white hover:bg-red-500 group hover:text-black">
                    <i class="lni lni-user text-red-500 transition duration-75 group-hover:text-white" title="Perfil"></i> <span class="ml-3 sm:hidden md:flex">Perfil</span>
                </a>
            </li>
        </ul>
    </div>
</aside>


