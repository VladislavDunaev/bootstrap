<label class="block">
    <span class="text-gray-700">Название</span>
    <input @isset($page->name) value="{{ $page->name }}" @endisset type="text" class="mt-1 block w-full" name="name" placeholder="Название..." />
</label>

<label class="block mt-3">
    <span class="text-gray-700">Изображение</span>
    <input type="file" class="mt-1 block w-full" name="img" placeholder="Изображение..." />
</label>

<label class="block mt-3">
    <span class="text-gray-700">Описание</span>
    <textarea class="mt-1 block w-full" rows="3" name="body">@isset($page->body){{ $page->body }}@endisset</textarea>
</label>

