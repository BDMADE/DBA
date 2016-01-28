
<!--For Administrator-->
@if(AppHelper::getAdminRole()=='Administrator')

<ul class="sidebar-menu">
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Accounts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminAccountController@index')}}"><i class="fa fa-angle-double-right"></i>All List</a></li>
                                <li><a href="{{action('AdminAccountController@create')}}"><i class="fa fa-angle-double-right"></i>Add An Account</a></li>
                               
                            </ul>
    </li>

    
    
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i>
                                <span>Member</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminMembershipController@index')}}"><i class="fa fa-angle-double-right"></i>All Members</a></li>
                                <li><a href="{{action('AdminMembershipController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Member</a></li>
                               
                            </ul>
    </li>

    
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Library</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminLibraryController@index')}}"><i class="fa fa-angle-double-right"></i>All Books</a></li>
                                <li><a href="{{action('AdminLibraryController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Book</a></li>
                                <li><a href="{{action('AdminLibraryUserController@index')}}"><i class="fa fa-angle-double-right"></i>Library User</a></li>
                                <li><a href="{{action('AdminLibraryUserController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Book Reader</a></li>
                               
                            </ul>
    </li>

    
    <li>
        <a href="{{action('AdminUserController@index')}}">
            <i class="fa fa-adn"></i> <span>User</span>
        </a>
    </li>

     <li>
        <a href="{{action('AdminVoterController@index')}}">
            <i class="fa fa-user"></i> <span>Voter List</span>
        </a>
    </li>
    
</ul>



<!--For Accountant-->
@elseif(AppHelper::getAdminRole()=='Accountant')

<ul class="sidebar-menu">
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Accounts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminAccountController@index')}}"><i class="fa fa-angle-double-right"></i>All List</a></li>
                                <li><a href="{{action('AdminAccountController@create')}}"><i class="fa fa-angle-double-right"></i>Add An Account</a></li>
                               
                            </ul>
    </li>

    
    
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i>
                                <span>Member</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminMembershipController@index')}}"><i class="fa fa-angle-double-right"></i>All Members</a></li>
                                <li><a href="{{action('AdminMembershipController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Member</a></li>
                               
                            </ul>
    </li>

       
</ul>


<!--For Administrator-->
@elseif(AppHelper::getAdminRole()=='Librarian')

<ul class="sidebar-menu">
    
    
    

    
    <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Library</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{action('AdminLibraryController@index')}}"><i class="fa fa-angle-double-right"></i>All Books</a></li>
                                <li><a href="{{action('AdminLibraryController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Book</a></li>
                                <li><a href="{{action('AdminLibraryUserController@index')}}"><i class="fa fa-angle-double-right"></i>Library User</a></li>
                                <li><a href="{{action('AdminLibraryUserController@create')}}"><i class="fa fa-angle-double-right"></i>Add A Book Reader</a></li>
                               
                            </ul>
    </li>

    
    
    
</ul>
@endif