<header class="header">
   <div class="flex flex-center-ai">
      <div id="iconMenu" class="ic--menu-icon">
         <i class="icon-menu"></i>
      </div>
      <ul class="menu-head">
         <li class="menu-head-item">
            <a href="http://declaracionjurada.fiscalia.gob.bo/reglamento.pdf">
               <i class="icon-import_contacts"></i>
               <span>Reglamento</span>
            </a>
         </li>
         <li class="menu-head-item">
            <a href="http://declaracionjurada.fiscalia.gob.bo/instructivo.pdf">
               <i class="icon-list_alt"></i>
               <span>Instructivo</span>
            </a>
         </li>
         <li class="menu-head-item">
            <a href="#">
               <i class="icon-help_outline"></i>
               <span>Ayuda</span>
            </a>
         </li>
         
      </ul>
   </div>
   <div>
      <div class="dropdown">
         <button class="btn-h-user dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="icon-account_circle"></i>
            @if(Session::get('nombre'))
               <span>{{ Session::get('nombre') }}</span>
            @else
               <span>{{ Auth::user()->email }}</span>
            @endif
         </button>
         <ul class="dropdown-menu">
            <li>
               <a class="dropdown-item" href="/inicio">
                  <i class="icon-home"></i>
                  <span>Inicio</span>
               </a>
            </li>
            <li>
               <a class="dropdown-item btn-danger" href="/logout">
                  <i class="icon-logout"></i>
                  <span>Cerrar sesión</span>
               </a>
            </li>
         </ul>
      </div>
   </div>
   <script>
      const side = document.getElementById('sidebar')
      const iconMenu = document.getElementById('iconMenu')
      // iconMenu.addEventListener('click', {
      // })
      if(iconMenu){
         iconMenu.addEventListener('click', e => { 
            side.classList.toggle('min-sidebar')
         })
      }
   </script>
</header>
