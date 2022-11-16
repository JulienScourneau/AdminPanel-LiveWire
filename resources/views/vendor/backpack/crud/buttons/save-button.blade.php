@if ($crud->hasAccess('save-button'))
  <a href="{{ url($crud->route.'/'.$entry->getKey().'/save-button') }}" class="btn btn-sm btn-link text-capitalize"><i class="la la-question"></i> save-button</a>
@endif