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
    <div class="flex justify-between items-end">
        <div class="heading-area">
            <h2 class="text-4xl font-bold capitalize ">Featured Jobs</h2>
        <p class="text-xl py-6">Find the right career opportunity for you</p>
        </div>
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <x-tag.button id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> UI UX Design</x-tag.button>
            </li>
            <li class="me-2" role="presentation">
                <x-tag.button id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Project Manager</x-tag.button>
            <li class="me-2" role="presentation">
                <x-tag.button id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Sales & Marketing</x-tag.button>
            </li>
            <li role="presentation">
                <x-tag.button id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Accounting</x-tag.button>
            </li>
        </ul>
    </div>



<div class="mb-4 border-b border-gray-200 dark:border-gray-700">

</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>

</section>
