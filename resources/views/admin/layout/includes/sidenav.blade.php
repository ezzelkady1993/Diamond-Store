{{-- Side Navigation --}}
<div class="col-md-2">    
    <div class="sidebar content-box" style="display: block;">        
        <ul class="nav">            
            <!-- Main menu -->            
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>                    Dashboard</a></li>            

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Product                  
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('product.index')}}">Products</a></li>   
                    <li><a class="dropdown-item" href="{{route('product.create')}}">Add Product</a></li>
                </ul> 
            </li>

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Category              
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('category.index')}}">Categories</a></li>
                </ul> 
            </li>

            <li class="submenu">                
                <a href="#">                    
                    <i class="glyphicon glyphicon-list"></i> Orders              
                    <span class="caret pull-right"></span>                
                </a>                

                <!-- Sub menu -->                
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
                    <li><a class="dropdown-item" href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
                    <li><a class="dropdown-item" href="{{url('admin/orders')}}">All Orders</a></li>
                </ul> 
            </li>
        </ul>               
    </div>
</div> 
<!-- ADMIN SIDE NAV-->