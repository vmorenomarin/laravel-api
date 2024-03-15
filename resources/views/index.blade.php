<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

</body>
<div class="bg-white px-4 py-12 sm:px-6 lg:px-8">
    @foreach($posts as $post)
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{$post['title']}}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$post['excerpt']}}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Created at <time
                        datetime="{{$post['created_at']}}">{{$post['created_at_formated']}}</time>
                </p>
            </div>
        </li>
    </ul>
    @endforeach
    {{$posts->links()}}
</div>
</body>

</html>