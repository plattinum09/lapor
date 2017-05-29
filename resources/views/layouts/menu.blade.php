<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-edit"></i><span>profiles</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>products</span></a>
</li>

<li class="{{ Request::is('vdos*') ? 'active' : '' }}">
    <a href="{!! route('vdos.index') !!}"><i class="fa fa-edit"></i><span>vdos</span></a>
</li>

<li class="{{ Request::is('slides*') ? 'active' : '' }}">
    <a href="{!! route('slides.index') !!}"><i class="fa fa-edit"></i><span>slides</span></a>
</li>

