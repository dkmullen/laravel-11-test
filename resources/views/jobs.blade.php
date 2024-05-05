<x-layout>
<x-slot:heading>
    Jobs Page
  </x-slot>
    <h1>Jobs</h1>
    <ul>
      @foreach ($jobs as $job)
        <li>
          <a href="/job/{{ $job['id']}}" class="underline">  
            <b>{{ $job['title'] }}</b>: {{ $job['salary'] }}
          </a>
        </li>
      @endforeach
    </ul>
</x-layout>