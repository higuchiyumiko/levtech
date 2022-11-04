       <x-app-layout>
              <x-slot name="header">
        　          Index
              </x-slot>
        <h1>Blog Name</h1>

        <form action="/posts" method="POST">
            
            <div class="category">
            <h2>Category</h2>
            <select name="post[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            
        </div>
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value=""{{ old('post.title') }}>
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            </div>
            <input type="submit" value="store">
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
      </x-app-layout>
