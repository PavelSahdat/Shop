<x-app-layout>
    <x-slot name="header" >
    <h2 class="font-semibold text-xl text-black-800 leading-tight">
             Create a Employee
        </h2>
    </x-slot>
    <div class="py-10  float-left">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <form action="{{route('employees.post')}}" method="post" >
    {{ csrf_field() }}
    <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Address</label>
    <input name="address" class="p-6 text-black-200 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <br>
    <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
    <input name="contact" class="py-1 text-black-200 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <br>

    <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
    <select name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <br>
    <label class="block mb-1 text-sm font-medium text-black-900 dark:text-white ">Info</label>
    <input name="info" class="py-1 text-black-200 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <br>
    <label class="block mb-1 text-sm font-medium text-black-900 dark:text-white ">Date Of Birth</label>
    <input type="date" name="dob" class="py-1 text-black-200 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <br><br>
    <label class="block mb-1 text-sm font-medium text-black-900 dark:text-white ">Salary</label>
    <input type="number" name="salary" class="py-1 text-black-200 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <br>
    <label class="block mb-1 text-sm font-medium text-black-900 dark:text-white ">Employee Status</label>
    <select name="status" id="">
        <option value="active">Active</option>
        <option value="suspended">Suspended</option>
        <option value="expired">Expired</option>
    </select>
       
    
    <br>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Employee</button>
    </form>     
    </div>
    </div>

    <x-slot name="copyright">Employee</x-slot>
    </x-app-layout>