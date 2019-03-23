@extends('layouts.admin')
@section("title", "App Settings")

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Clients</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-7">

                    @includeIf(config('app_settings.flash_partial'))

                    <form method="post"
                          action="{{ route('admin.settings') }}" class="settings-form form-horizontal mb-3" enctype="multipart/form-data" role="form">
                        {!! csrf_field() !!}

                        @if( isset($settingsUI) && count($settingsUI) )

                            @foreach(array_get($settingsUI, 'sections', []) as $section => $fields)
                                @component('app_settings::section', compact('fields'))
                                    <div class="{{ array_get($fields, 'section_body_class', config('app_settings.section_body_class', 'card-body')) }}">
                                        @foreach(array_get($fields, 'inputs', []) as $field)
                                            @if(!view()->exists('app_settings::fields.' . $field['type']))
                                                <div style="background-color: #f7ecb5; box-shadow: inset 2px 2px 7px #e0c492; border-radius: 0.3rem; padding: 1rem; margin-bottom: 1rem">
                                                    Defined setting <strong>{{ $field['name'] }}</strong> with
                                                    type <code>{{ $field['type'] }}</code> field is not supported. <br>
                                                    You can create a <code>fields/{{ $field['type'] }}.balde.php</code> to render this input however you want.
                                                </div>
                                            @endif
                                            @includeIf('app_settings::fields.' . $field['type'] )
                                        @endforeach
                                    </div>
                                @endcomponent
                            @endforeach
                        @endif

                        <div class="row m-b-md">
                            <div class="col-md-12">
                                <button class="btn-primary btn">
                                    {{ array_get($settingsUI, 'submit_btn_text', 'Save Settings') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Main Wrapper -->
    </div>
@endsection