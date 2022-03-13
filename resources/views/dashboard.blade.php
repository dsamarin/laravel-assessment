@extends('layouts.app')

@section('content')
<section class="antialiased text-gray-600 px-4">
    <div class="flex flex-col justify-center h-full">
    
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Dashboard: Employees</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">

            @if ($employees->count())
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="p-2 whitespace-nowrap text-left">ID</th>
                            <th class="p-2 whitespace-nowrap text-left">Name</th>
                            <th class="p-2 whitespace-nowrap text-left">Performance</th>
                            <th class="p-2 whitespace-nowrap text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        @foreach ($employees as $employee)
                        <tr>
                            <td class="p-2 whitespace-nowrap">{{ $employee->id }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $employee->name }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $employee->performance }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $employee->date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>There are no employees.</p>
            @endif
        </div>
    </div>
</section>
@endsection
