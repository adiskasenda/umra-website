<div class="card card-bordered" style="width: 100%;">
    <div class="">
        <div class="menu-content d-flex align-items-center p-5">
            <div class="symbol symbol-circle me-5">
                <img alt="Logo" class="img-avatar lozad" src="{{ Session::get('user')['url_photo'] }}">
            </div>
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">{{ Session::get('user')['firstname'] }}</div>
                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Session::get('user')['email'] }}</a>
            </div>
        </div>
    </div>

    <div class="card-body" style="padding: 0rem !important;">
        @foreach (Helpers::sidebarProfile() as $key => $sidebar)
        <div class="card-body card-bordered" style="padding: 1rem !important; border-top: 1px solid var(--kt-card-border-color);">
            <!-- Side Menu -->
            <div class="d-flex flex-stack fs-4 py-3 rotate collapsible active"  data-bs-toggle="collapse" href="#kt_user_akun_and_security_{{ $key }}" role="button" aria-expanded="true" aria-controls="kt_user_akun_and_security_{{ $key }}">
                <div class="fw-bold justify-content-between">
                    {{ $sidebar['collaps'] }}
                </div>
                <span class="ms-2 rotate-180">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </span>
            </div>
            <div id="kt_user_akun_and_security_{{ $key }}" class="collapse show">
                @foreach ($sidebar['menu_collaps'] as $menu)
                    <div class="fs-6 py-2">
                        <div class="p-3" style="@if(request()->url() == $menu['url']) background-color: #E6F1F0; border-radius:3px; @endif" >
                            <a href="{{ $menu['url'] }}" @if( $menu['title'] == 'Syarat dan Ketentuan' || $menu['title'] == 'Kebijakan Privasi' || $menu['title'] == 'Customer Service' ) target="_blank" @endif class="@if($menu['title'] == 'Syarat dan Ketentuan') url-term-and-condition @endif @if($menu['title'] == 'Kebijakan Privasi') url-privacy-policy @endif text-dark sidebar-custom @if( false ) sidebar-custom-active @endif">
                                <img src="{{ $menu['icon'] }}" alt="{{ $menu['icon'] }}" class="mx-4"> {{ $menu['title'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>


