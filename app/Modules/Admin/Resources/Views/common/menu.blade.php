@if (!empty($items))
    <div class="hamburger">
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
    </div>

    <aside class="main-sidebar">
        <div class="main-sidebar__close">X</div>
        <section class="sidebar">
            <ul class="sidebar-menu">
                @foreach ($items as $group)
                <li class="treeview active">
                    <div class="treeview-group">
                        <i class="fa {{$group['icon']}}"></i>
                        <span>{{$group['title']}}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-down pull-right"></i>
                        </span>
                    </div>
                    @if (isset($group['items']))
                    <ul class="treeview-menu opened">
                        @foreach ($group['items'] as $item)
                        <li>
                            <a href="<?=isset($item['route'])?route($item['route']):$item['href']?>">
                                <i class="fa {{$item['icon']}}"></i>
                                {{$item['title']}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </section>
    </aside>
@endif