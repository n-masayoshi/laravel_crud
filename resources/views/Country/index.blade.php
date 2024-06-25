@extends("layouts.app")
@section("content")
<div class="row">
{{-- 検索条件部？
    <div class="col-md-4 col-lg-3  mb-4">
        <form class="card mb-4" action="/" method="get">
            <div class="card-header">商品検索</div>
            <dl class="search-box card-body mb-0">
                <dt>カテゴリ</dt>
                <dd>
                    <select name="category_id" class="form-select">
                        <option value=""></option>
                        @foreach (App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"{{ Request::get('category_id') == $category->id ? ' selected' : ''}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </dd>
                <dt>キーワード</dt>
                <dd>
                    <input type="text" name="keyword" class="form-control" placeholder="メーカー・商品名" value="{{ Request::get('keyword') }}">
                </dd>
                <dt>価格帯</dt>
                <dd>
                    <div class="input-group">
                        <input type="text" name="min_price" class="form-control" placeholder="円" value="{{ Request::get('min_price') }}">
                        <span class="input-group-text">〜</span>
                        <input type="text" name="max_price" class="form-control" placeholder="円" value="{{ Request::get('max_price') }}">
                    </div>
                </dd>
                <dt>並び順</dt>
                <dd>
                    <select name="sort" class="form-select">
                        <option value="">登録順</option>
                        <option value="price_asc"{{ Request::get('sort') == 'price_asc' ? ' selected' : ''}}>価格の安い順</option>
                        <option value="price_desc"{{ Request::get('sort') == 'price_desc' ? ' selected' : ''}}>価格の高い順</option>
                    </select>
                </dd>
            </dl>
            <div class="card-footer">
                <button type="submit" class="btn w-100 btn-success">検索</button>
            </div>
        </form>
        <form onsubmit="return confirm('ログアウトしますか？')" action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-sm btn-dark">ログアウト</button>
        </form>
    </div>
--}}
    <div class="col-md-8 col-lg-9">
        <div class="table-responsive">
            <table class="table table-striped">
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
            </table>
        </div>
    </div>
</div>
@endsection("content")
