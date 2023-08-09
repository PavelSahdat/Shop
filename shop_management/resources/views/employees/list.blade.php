<x-app-layout>
    <x-slot name='header'>
        <h1 class="flex items-center text-5xl font-extrabold dark:text-white">
        <span class="bg-blue-100 text-blue-800 text-2xl font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-6 float-center">
                    Employee Details
        </span>
        </h1>
    </x-slot>


    <div class="py-2" >
        <div class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 float-right ">
        
        <div class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0" >
            <a href="{{route('employees.create')}}">   
                <button  class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Create Employee Form
        
                </button>
            </a>
        </div>
        </div>
        <div>
                <table class="hover:table-fixed" >
                    <thead>
                        <tr>
                        <th>Address &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Contact &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Gender &nbsp;&nbsp;</th>
                        <th>Info &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Salary &nbsp;&nbsp;</th>
                        <th>Status &nbsp;&nbsp;</th>
                        <th>User_Id &nbsp;&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)                  
                        <tr>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->contact}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->info}}</td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->salary}}</td>
                            <td>{{$employee->status}}</td>
                            <td>{{$employee->user_id}}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>

                </table>

     
        </div>

    </div>

   






    <x-slot name="copyright">Employee</x-slot>
</x-app-layout>