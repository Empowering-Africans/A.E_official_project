<x-app-layout><br>
    
        
            <b> <h2 style="font-size: 2rem; color: white;">
                {{ Auth::user()->name }}'s {{ __('Dashboard') }}
            </h2></b>
        
    


    <!-- CONTENT -->
<section id="content">
		{{-- <img src="img/farmland-background.jpg" id="images" alt="background-images"> --}}

    <!-- MAIN -->
    <main>
        

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
                    <h3>500</h3>
                    <a href="{{  route('products') }}">New Products</a>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>284</h3>
                    <a href="{{  route('sales') }}">Sold Products</a>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3>$2,500</h3>
                    <a href="{{  route('available') }}">Total Sales</a>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Mr Joseph</p>
                            </td>
                            <td>25-12-2022</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Mrs Lucy Chioma</p>
                            </td>
                            <td>06-06-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>John Rutherford</p>
                            </td>
                            <td>01-10-2021</td>
                            <td><span class="status process">In Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Mrs Ife</p>
                            </td>
                            <td>02-06-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/people.png">
                                <p>Mrs Grace</p>
                            </td>
                            <td>09-03-2023</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Agricultural Statistics</h3>
                    <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <ul class="todo-list">
                    <li class="completed">
                        <p>Employment</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>Aids to Farmers</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="completed-2">
                        <p>Foreign exchange</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>The Country's interest from it</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    
</section>

	
</x-app-layout>

