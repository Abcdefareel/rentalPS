 <?php
    include 'templates/header.php';
    ?>
 <main class="p-4">
     <!-- Stats cards -->
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
         <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-indigo-500">
             <div class="flex justify-between">
                 <div>
                     <p class="text-sm text-gray-500">Total Bookings</p>
                     <h3 class="text-2xl font-bold">124</h3>
                 </div>
                 <div class="p-3 bg-indigo-100 rounded-full text-indigo-600">
                     <i class="fas fa-calendar-check"></i>
                 </div>
             </div>
             <p class="text-xs text-gray-500 mt-2"><span class="text-green-500">+12%</span> from last month</p>
         </div>

         <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-blue-500">
             <div class="flex justify-between">
                 <div>
                     <p class="text-sm text-gray-500">Active Rentals</p>
                     <h3 class="text-2xl font-bold">18</h3>
                 </div>
                 <div class="p-3 bg-blue-100 rounded-full text-blue-600">
                     <i class="fas fa-gamepad"></i>
                 </div>
             </div>
             <p class="text-xs text-gray-500 mt-2"><span class="text-green-500">+5%</span> from yesterday</p>
         </div>

         <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-green-500">
             <div class="flex justify-between">
                 <div>
                     <p class="text-sm text-gray-500">Available Consoles</p>
                     <h3 class="text-2xl font-bold">6</h3>
                 </div>
                 <div class="p-3 bg-green-100 rounded-full text-green-600">
                     <i class="fas fa-check-circle"></i>
                 </div>
             </div>
             <p class="text-xs text-gray-500 mt-2"><span class="text-red-500">-2</span> currently in maintenance</p>
         </div>

         <div class="bg-white p-4 rounded-lg shadow-sm border-l-4 border-purple-500">
             <div class="flex justify-between">
                 <div>
                     <p class="text-sm text-gray-500">Revenue</p>
                     <h3 class="text-2xl font-bold">$2,450</h3>
                 </div>
                 <div class="p-3 bg-purple-100 rounded-full text-purple-600">
                     <i class="fas fa-dollar-sign"></i>
                 </div>
             </div>
             <p class="text-xs text-gray-500 mt-2"><span class="text-green-500">+18%</span> from last month</p>
         </div>
     </div>

     <!-- Charts and tables -->
     <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
         <!-- Booking chart -->
         <div class="bg-white p-4 rounded-lg shadow-sm lg:col-span-2">
             <div class="flex justify-between items-center mb-4">
                 <h3 class="font-semibold text-gray-800">Booking Trends</h3>
                 <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-200">
                     <option>Last 7 days</option>
                     <option>Last 30 days</option>
                     <option selected>Last 3 months</option>
                 </select>
             </div>
             <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                 <!-- Chart placeholder - would be replaced with actual chart library -->
                 <p class="text-gray-500">Booking chart visualization</p>
             </div>
         </div>

         <!-- Popular consoles -->
         <div class="bg-white p-4 rounded-lg shadow-sm">
             <h3 class="font-semibold text-gray-800 mb-4">Popular Consoles</h3>
             <div class="space-y-4">
                 <div class="flex items-center">
                     <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div class="flex-1">
                         <p class="text-sm font-medium">PS5 Standard</p>
                         <div class="w-full bg-gray-200 rounded-full h-1.5">
                             <div class="bg-blue-600 h-1.5 rounded-full" style="width: 75%"></div>
                         </div>
                     </div>
                     <span class="text-sm text-gray-500 ml-2">75%</span>
                 </div>

                 <div class="flex items-center">
                     <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div class="flex-1">
                         <p class="text-sm font-medium">PS5 Digital</p>
                         <div class="w-full bg-gray-200 rounded-full h-1.5">
                             <div class="bg-purple-600 h-1.5 rounded-full" style="width: 60%"></div>
                         </div>
                     </div>
                     <span class="text-sm text-gray-500 ml-2">60%</span>
                 </div>

                 <div class="flex items-center">
                     <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div class="flex-1">
                         <p class="text-sm font-medium">PS4 Pro</p>
                         <div class="w-full bg-gray-200 rounded-full h-1.5">
                             <div class="bg-green-600 h-1.5 rounded-full" style="width: 45%"></div>
                         </div>
                     </div>
                     <span class="text-sm text-gray-500 ml-2">45%</span>
                 </div>

                 <div class="flex items-center">
                     <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div class="flex-1">
                         <p class="text-sm font-medium">PS4 Slim</p>
                         <div class="w-full bg-gray-200 rounded-full h-1.5">
                             <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 30%"></div>
                         </div>
                     </div>
                     <span class="text-sm text-gray-500 ml-2">30%</span>
                 </div>
             </div>
         </div>
     </div>

     <!-- Recent bookings and availability -->
     <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
         <!-- Recent bookings -->
         <div class="bg-white p-4 rounded-lg shadow-sm">
             <div class="flex justify-between items-center mb-4">
                 <h3 class="font-semibold text-gray-800">Recent Bookings</h3>
                 <a href="#" class="text-sm text-indigo-600 hover:underline">View All</a>
             </div>
             <div class="overflow-x-auto">
                 <table class="min-w-full divide-y divide-gray-200">
                     <thead class="bg-gray-50">
                         <tr>
                             <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                             <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Console</th>
                             <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                             <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                         </tr>
                     </thead>
                     <tbody class="bg-white divide-y divide-gray-200">
                         <tr>
                             <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">PS5 Standard</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Today, 14:00</td>
                             <td class="px-4 py-3 whitespace-nowrap">
                                 <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                             </td>
                         </tr>
                         <tr>
                             <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Jane Smith</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">PS5 Digital</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Tomorrow, 16:30</td>
                             <td class="px-4 py-3 whitespace-nowrap">
                                 <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Upcoming</span>
                             </td>
                         </tr>
                         <tr>
                             <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">Mike Johnson</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">PS4 Pro</td>
                             <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">Yesterday, 19:00</td>
                             <td class="px-4 py-3 whitespace-nowrap">
                                 <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Completed</span>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>

         <!-- Console availability -->
         <div class="bg-white p-4 rounded-lg shadow-sm">
             <div class="flex justify-between items-center mb-4">
                 <h3 class="font-semibold text-gray-800">Console Availability</h3>
                 <a href="#" class="text-sm text-indigo-600 hover:underline">Manage</a>
             </div>
             <div class="grid grid-cols-2 gap-3">
                 <div class="border rounded-lg p-3 flex items-center">
                     <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div>
                         <p class="font-medium">PS5 Standard</p>
                         <p class="text-sm text-gray-500">3/5 available</p>
                     </div>
                 </div>
                 <div class="border rounded-lg p-3 flex items-center">
                     <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div>
                         <p class="font-medium">PS5 Digital</p>
                         <p class="text-sm text-gray-500">2/4 available</p>
                     </div>
                 </div>
                 <div class="border rounded-lg p-3 flex items-center">
                     <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div>
                         <p class="font-medium">PS4 Pro</p>
                         <p class="text-sm text-gray-500">1/3 available</p>
                     </div>
                 </div>
                 <div class="border rounded-lg p-3 flex items-center">
                     <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600 mr-3">
                         <i class="fas fa-gamepad"></i>
                     </div>
                     <div>
                         <p class="font-medium">PS4 Slim</p>
                         <p class="text-sm text-gray-500">4/4 available</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
 <?php
    include 'templates/footer.php';
    ?>