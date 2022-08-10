@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.eventType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.eventType.fields.id') }}
                        </th>
                        <td>
                            {{ $eventType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventType.fields.name') }}
                        </th>
                        <td>
                            {{ $eventType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventType.fields.slug') }}
                        </th>
                        <td>
                            {{ $eventType->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventType.fields.photo') }}
                        </th>
                        <td>
                            @if($eventType->photo)
                                <a href="{{ $eventType->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $eventType->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection