@if ($entity->id && $frontUrl)
<div class="pull-right">
    <a class="btn btn-default" href="{{ $frontUrl }}" target="_blank">
        <i class="glyphicon glyphicon-eye-open"></i> @lang('admin::admin.full_page')
    </a>
</div>
@endif
