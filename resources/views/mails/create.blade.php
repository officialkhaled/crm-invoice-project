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
                            <b>Create Mail</b>
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-danger float-end shadow-sm">
                                <i class="fa-solid fa-circle-chevron-left opacity-75"></i>&nbsp;&nbsp;Back
                            </a>
                        </h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('mail.send') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="to_mail">Sending E-mail Address</label>
                                        <input type="text" name="to_mail" id="to_mail" class="form-control rounded-md" placeholder="example@gmail.com"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control rounded-md" placeholder="Title"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="subject">Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control rounded-md" placeholder="Subject"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="body">Body</label>
                                        <textarea name="body" id="body" rows="2" class="form-control rounded-md" placeholder="Body"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 mt-4 flex justify-center gap-1">
                                        <button type="submit" class="btn btn-sm btn-success shadow-sm" id="search_btn">
                                            <i class="fa-solid fa-paper-plane opacity-75"></i>&nbsp;&nbsp;Send
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

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        function submitForm(data = null) {--}}
{{--            $('.err-msg').remove()--}}
{{--            let my_url = "/mail/send";--}}
{{--            $('#search_btn').prop('disabled', true);--}}
{{--            $.ajax({--}}
{{--                type: 'POST',--}}
{{--                url: my_url,--}}
{{--                data: {--}}
{{--                    to_mail: $('#to_mail').val(),--}}
{{--                    title: $('#title').val(),--}}
{{--                    subject: $('#subject').val(),--}}
{{--                    body: $('#body').val(),--}}
{{--                },--}}
{{--                success: () => {--}}
{{--                    $('#search_btn').prop('disabled', false);--}}
{{--                },--}}
{{--                error: function (data) {--}}
{{--                    $('#search_btn').prop('disabled', false);--}}
{{--                    $.each(data.responseJSON.errors, function (field_name, error) {--}}
{{--                        let target = $(document).find('[name=' + field_name + ']');--}}
{{--                        if (target.hasClass('form-control')) {--}}
{{--                            target.next().append('<span class="text-strong text-danger err-msg">' + error + '</span>')--}}
{{--                        } else {--}}
{{--                            target.next().after('<span class="text-strong text-danger err-msg">' + error + '</span>')--}}
{{--                        }--}}
{{--                    })--}}
{{--                }--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
{{--@endsection--}}
