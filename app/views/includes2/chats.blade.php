<ul class="nav nav-pills">

            <!-- Comment button with number of latest comments count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-comments"></i> Preguntas <span   class="label label-info">{{$num_preg_null}}</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-comments"></i> Preguntas</h5>
                    <!-- Use hr tag to add border -->
                    <hr />
                  </li>
                 

                 @foreach($preguntas_null as $preg)
                  <li>
                    <h6><a href="{{URL::route('adminpanel-chat-unico',array('id'=>$preg->id))}}">{{$preg->pregunta}}?</a> <span class="label label-warning pull-right"><abbr class="timeago" title="{{ $preg->created_at }}">{{ $preg->created_at }}</abbr></span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                 @endforeach                   
                  <li>
                    <div class="drop-foot">
                      <a href="{{URL::route('adminpanel-chats')}}">Ver Todas</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Message button with number of latest messages count-->
            <!--<li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-envelope"></i> Inbox <span class="label label-primary">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    
                    <h5><i class="fa fa-envelope"></i> Messages</h5>
                    
                    <hr />
                  </li>
                  <li>
                    
                    <h6><a href="#">Hello how are you?</a></h6>
                    
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Today is wonderful?</a></h6>
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li>-->

            <!-- Members button with number of latest members count -->
            <!--<li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user"></i> Users <span   class="label label-success">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    
                    <h5><i class="fa fa-user"></i> Users</h5>
                    
                    <hr />
                  </li>
                  <li>
                    
                    <h6><a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> -->

        </ul>