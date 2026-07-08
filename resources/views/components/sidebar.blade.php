<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
   <div class="app-brand demo">
      <a href="{{ route('welcome') }}" class="app-brand-link">
         <span class="app-brand-logo demo">
            <img src="{{ asset('fk.PNG') }}" alt="Fungsi Kuadrat" width="30" style="border-radius: 150px" />
         </span>
         <span class="app-brand-text menu-text fw-bold ms-2 fs-5">BelajarKuadrat</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
         <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
   </div>

   <div class="menu-inner-shadow"></div>

   <ul class="menu-inner py-1">
      @if(auth()->check() && auth()->user()->role === 'student')
         @if(!Request::is('*indikator*') && !Request::is('*profil*') && !Request::is('*petunjuk*'))
         <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bxs-book-open"></i>
               <div data-i18n="Basic">Fungsi Kuadrat</div>
            </a>
         </li>
         @endif
      @endif

      @if (auth()->check() && auth()->user()->isStudent())

         @php
            $completedMenus = \App\Models\StudentActivity::where('user_id', auth()->id())
               ->where('completed', true)
               ->pluck('menu_key')
               ->toArray();
         @endphp

         @foreach($menus as $menu)

            @php
                  $currentProgress = $progress ? $progress->progress : 0;

                  $isLocked = $currentProgress < $menu['progress'];

                  $quizLocked = !in_array($menu['key'], $completedMenus);

                  $isActive = Route::is($menu['route']) ||
                              (Route::is('quiz.show') && request()->route('quizKey') === $menu['key']);
            @endphp

            <li class="menu-item {{ $isActive ? 'active open' : '' }}">
               {{-- Menu Evaluasi tanpa submenu --}}
               @if ($menu['name'] === 'Evaluasi')
                  <a href="{{ $isLocked ? 'javascript:void(0);' : route($menu['route']) }}" 
                     class="menu-link {{ $isLocked ? 'text-muted' : '' }}"
                     style="{{ $isLocked ? 'cursor: not-allowed;' : '' }}">
                     
                     {{-- Ikon otomatis jadi gembok kalau terkunci --}}
                     <i class="menu-icon tf-icons {{ $isLocked ? 'bx bx-lock-alt' : 'bx bx-flag' }}"></i>
                     
                     <div data-i18n="Evaluasi">{{ $menu['name'] }}</div>
                  </a>
               @else
                  <a href="{{ $isLocked ? '#' : route($menu['route']) }}"
                     class="menu-link menu-toggle {{ $isLocked ? 'text-muted' : '' }}"
                     style="{{ $isLocked ? 'cursor: not-allowed;' : '' }}">
                     <i class="menu-icon tf-icons {{ $isLocked ? 'bx bx-lock-alt' : 'bx bx-book-open' }}"></i>
                     <div data-i18n="Materi">{{ $menu['name'] }}</div>
                  </a>

                  <!-- Submenu -->
                  <ul class="menu-sub">
                     <!-- Materi -->
                     <li class="menu-item {{ Route::is($menu['route']) ? 'active' : '' }}">
                        @if ($isLocked)
                           <div class="menu-link text-muted" style="cursor: not-allowed;">
                              <i class="bx bx-lock-alt me-2"></i>
                              <div data-i18n="Materi">Materi (Terkunci)</div>
                           </div>
                        @else
                           <a href="{{ route($menu['route']) }}" class="menu-link">
                              <i class="bx bx-book-open me-2"></i>
                              <div data-i18n="Materi">Materi</div>
                           </a>
                        @endif
                     </li>

                     <!-- Quiz -->
                     <li class="menu-item {{ Route::is('quiz.show') && request()->route('quizKey') === $menu['key'] ? 'active' : '' }}">
                        @if ($isLocked || $quizLocked)
                           <div class="menu-link text-muted" style="cursor: not-allowed;">
                              <i class="bx bx-lock-alt me-2"></i>
                              <div data-i18n="Quiz">Kuis (Terkunci)</div>
                           </div>
                        @else
                           <a href="{{ route('quiz.show', ['quizKey' => $menu['key']]) }}" class="menu-link">
                              <i class="bx bx-edit me-2"></i>
                              <div data-i18n="Quiz">Kuis</div>
                           </a>
                        @endif
                     </li>
                  </ul>
               @endif
            </li>
         @endforeach
      @else
         @if(auth()->check())
            <li class="menu-header small text-uppercase">
               <span class="menu-header-text">Guru</span>
            </li>

            <li class="menu-item {{ Route::is('students.*') ? 'active' : '' }}">
               <a href="{{ route('students.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="Siswa"> Data Siswa</div>
               </a>
            </li>

            <li class="menu-item {{ Route::is('kkm.*') ? 'active' : '' }}">
               <a href="{{ route('kkm.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-slider-alt"></i>
                  <div>Pengaturan KKM</div>
               </a>
            </li>

            <li class="menu-item {{ request()->routeIs('bank-soal.*') ? 'active' : '' }}">
               <a href="{{ route('bank-soal.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-book-open"></i>
                  <div>Bank Soal</div>
               </a>
            </li>

         @endif
      @endif
   </ul>
</aside>
