<x-app-layout>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success mt-2">{{ session('status') }}</div>
                @endif

                <div class="card mt-3 mb-6">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-between align-items-center"><b>Leads</b>
                            @can('create permission')
                                <a href="{{ route('leads.create') }}" class="btn btn-sm bg-indigo-500 text-white hover:bg-indigo-600 float-end shadow-sm">
                                    <i class="fa-solid fa-plus opacity-75"></i>&nbsp;&nbsp;Add
                                </a>
                            @endcan
                        </h2>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="table-info">
                                <th class="text-center" width="3%">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Source</th>
                                <th>Source URL</th>
                                <th width="10%">Notes</th>
                                <th width="10%">Status</th>
                                <th width="10%" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($leads as $lead)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $lead->name }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->phone }}</td>
                                    <td>{{ $lead->source }}</td>
                                    <td>
                                        <a href="{{ $lead->source_url }}" class="underline text-blue-600" target="_blank">
                                            {{ $lead->source_url }}
                                        </a>
                                    </td>
                                    <td>{{ $lead->notes }}</td>
                                    <td class="text-center">
                                        <label class="badge bg-primary mx-1">{{ $lead->status }}</label>
                                    </td>
                                    <td class="d-flex justify-content-center gap-1">
                                        @can('update permission')
                                            <a href="{{ route('leads.edit', $lead->id) }}" class="btn btn-sm btn-success shadow-sm"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="fa-solid fa-pen-to-square opacity-75"></i>
                                            </a>
                                        @endcan
                                        @can('delete permission')
                                            <form action="{{ route('leads.destroy', $lead->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger shadow-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="fa-solid fa-trash opacity-75"></i>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No Data Found!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
