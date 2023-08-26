<!-- Dashboard -->
<nav>
      <ul class="space-y-2 ml-2">
        <li>
          <a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Dashboard</a>
        </li>
      </ul>
    

		<!-- Admin -->
    
	  <ul class="pl-4">
        <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Admin</a>
          <ul class="pl-4">
            <li><a href="{{url('/users')}}" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Users</a></li>
            <li><a href="{{url('/doctor_types')}}" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Doctor Type</a></li>
            <li><a href="{{url('/patients')}}" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Patient</a></li>
          </ul>
        </li>
      </ul>
        
	
	
		<!-- Doctor -->
    
	  <ul class="pl-4">
        <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Doctor</a>
          <ul class="pl-4">
            <li><a href="{{url('/appointments')}}" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Appointments</a></li>
            <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Schedule</a></li>
          </ul>
        </li>
      </ul>
    	
	
	
		<!-- Patient -->
    
	  <ul class="pl-4">
        <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Patient</a>
          <ul class="pl-4">
            <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Book Appointments</a></li>
            <li><a href="#" class="block py-2 px-4 rounded transition duration-200 hover:bg-gray-700">Search Doctors</a></li>
          </ul>
        </li>
      </ul>
    </nav>