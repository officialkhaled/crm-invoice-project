<x-app-layout>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <ul class="alert alert-warning mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-between align-items-center">
                            <b>Create Lead</b>
                            <a href="{{ route('leads.index') }}" class="btn btn-sm btn-danger float-end shadow-sm">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('leads.store') }}" method="POST" id="customer-form" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-md" placeholder="e.g. John Doe"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control rounded-md" placeholder="e.g. john@mail.com"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control rounded-md" placeholder="e.g. 01572456842"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="source">Source</label>
                                        <input type="text" name="source" id="source" class="form-control rounded-md" placeholder="e.g. Website/Referral"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="source_url">Source URL</label>
                                        <input type="text" name="source_url" id="source_url" class="form-control rounded-md" placeholder="e.g. www.google.com"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea name="notes" class="form-control rounded-md"
                                                  id="notes" rows="2" placeholder="e.g. notes"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 mt-4 flex justify-center gap-1">
                                        <button type="submit" class="btn btn-sm btn-success shadow-sm">
                                            <i class="fa-solid fa-floppy-disk opacity-75"></i>&nbsp;&nbsp;Save
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning shadow-sm" onclick="pageRefresh()">
                                            <i class="fa-solid fa-arrows-rotate opacity-75"></i>&nbsp;&nbsp;Refresh
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
