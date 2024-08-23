@php
$items = [
    ['title' => 'Human Resource', 'link' => 'https://example.com/first'],
    ['title' => 'Project Manager', 'link' => 'https://example.com/second'],
    ['title' => 'Delivery Driver', 'link' => 'https://example.com/third'],
    ['title' => 'Accounting', 'link' => 'https://example.com/first'],
    ['title' => 'Customer Service', 'link' => 'https://example.com/second'],
    ['title' => 'Data Science', 'link' => 'https://example.com/third'],
    ['title' => 'Engineering', 'link' => 'https://example.com/first'],
    ['title' => 'IT & Networking', 'link' => 'https://example.com/second'],
    ['title' => 'Sales & Marketing', 'link' => 'https://example.com/third'],
    ['title' => 'Writing', 'link' => 'https://example.com/third'],
];
@endphp

<section class="container mx-auto py-12">
    <h2 class="text-4xl text-center font-bold capitalize">Browse by category</h2>
    <p class="text-xl text-center py-6">Recruitment Made Easy in 100 seconds</p>
    <div class="grid grid-cols-5 gap-5">
        @foreach ($items as $item)
            <x-card.cate-card :title="$item['title']" :link="$item['link']" />
        @endforeach
    </div>
</section>
