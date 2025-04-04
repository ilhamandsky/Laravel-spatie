@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Role Information</span>
                <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $role->name }}
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Permissions:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        @if ($role->name == 'Super Admin')
                            <span class="badge bg-primary">All</span>
                        @else
                            @forelse ($rolePermissions as $permission)
                                <span class="badge bg-primary">{{ $permission->name }}</span>
                            @empty
                                <span class="text-muted">No permissions assigned</span>
                            @endforelse
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
