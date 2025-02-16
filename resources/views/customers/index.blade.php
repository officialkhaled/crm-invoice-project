<x-app-layout>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success mt-2">{{ session('status') }}</div>
                @endif

                <div class="card mt-3 mb-6">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-between align-items-center"><b>Customers</b>
                            @can('create permission')
                                <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary float-end shadow-sm">
                                    <i class="fa-solid fa-plus opacity-75"></i>&nbsp;&nbsp;Add
                                </a>
                            @endcan
                        </h2>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center" width="3%">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Company</th>
                                <th width="10%">Notes</th>
                                <th width="10%" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($customers as $customer)
                                <tr>
                                    <td class="text-center">{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->company }}</td>
                                    <td>{{ $customer->notes }}</td>
                                    <td class="text-center">
                                        @can('update permission')
                                            <a href="{{ url('customers/'.$customer->id.'/edit') }}" class="btn btn-sm btn-success shadow-sm">
                                                <i class="fa-solid fa-pen-to-square opacity-75"></i>
                                            </a>
                                        @endcan
                                        @can('delete permission')
                                            <a href="{{ url('customers/'.$customer->id.'/delete') }}" class="btn btn-sm btn-danger shadow-sm">
                                                <i class="fa-solid fa-trash opacity-75"></i>
                                            </a>
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
