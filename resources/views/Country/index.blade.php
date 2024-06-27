@extends("layouts.app")
@section("content")
{{-- ページネーション：tailwindcss を適用するため --}}
<script src="https://cdn.tailwindcss.com"></script>

<div class="row">
    <div class="col-md-8 col-lg-9">
        <div class="table-responsive">
            <table class="table-auto">
                <thead>
                    <tr>
                        {{-- <th>国名</th><th>選手数</th><th>W杯優勝回数</th> --}}
                        <th>国名</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->country_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <!-- ページネーションリンクを表示 -->
            </table>
            {{ $countries->links() }}
        </div>
    </div>
</div>
@endsection("content")
