@extends('layouts.admin')


@section('title' , 'Dashboard')


@section('body')
 <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      @if(session_g)
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{  @$totalReport ?? 0}}</h3>

              <p>Merchant Report</p>
            </div>
            <div class="icon">
              <i class="ion ion-flag"></i>
            </div>
            <a href="{{ route('admin.reports') }}" class="small-box-footer">All Merchant Reports <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
              <h3>{{ @$totalTransactions ?? 0 }}</h3>

              <p>Transactions</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('admin.transactions') }}" class="small-box-footer">All Transactions <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ @$totalMerchants ?? 0}}</h3>

              <p>Merchants</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ route('admin.posmerchants') }}" class="small-box-footer">All Merchants <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{  @$totalTestimonials ?? 0}}</h3>

              <p>Testimonals</p>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-chatboxes"></i> --}}
              <i class="ion ion-chatbubbles"></i>
            </div>
            <a href="{{ route('admin.testimonials') }}" class="small-box-footer">All Testimonals <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
     

      <!-- Main row -->
        <!-- GRaph-->
        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i> Filter</button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Daily</a></li>
                    <li><a href="#">Weekly</a></li>
                    <li><a href="#">Monthly</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px; width: 677px;" width="677" height="180"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                {{-- <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">New Users</span>
                    <span class="progress-number"><b>160</b>/200</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Complete Purchase</span>
                    <span class="progress-number"><b>310</b>/400</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div> --}}
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL TRANSACTIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">COMPLETED TRANSACTIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      @endif

        <!-- Widget-->
        <div class="row" style="margin-top: 3%">
          <!-- Left col -->
          @if(Auth::guard("admin")->user()->role_id == 1)
          <section class="col-lg-6 connectedSortable">
            <!-- Chat box -->
            <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Contact Message</h3>
                <div class="box-body " id="chat-box">
                  <!-- chat item -->
                  @foreach($contacts as $key => $contact)
                    <div class="item">
                        <p class="">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ $contact->created_at->diffForHumans()}}</small>
                                {{ ucwords($contact->name)}}
                            </a><br>{{ strtolower($contact->email)}}<br>
                            {{ $contact->message}}
                        </p>
                    </div>
                  @endforeach
                  <!-- /.item -->
                    </div>
                  <!-- /.chat -->
                </div>
                <!-- /.box (chat box) -->
            </div>
          </section>
          @endif
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">
              <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>
                <h3 class="box-title">Send Quick Email</h3>
              </div>
              <div class="box-body">
                <form action="#" method="post">
                {!! csrf_field()  !!}
                  <div class="form-group">
                    <label>Send Mail As</label>
                    <select type="email" class="form-control" name="sender">
                        <option value="merchants">merchants@cashurban.com</option>
                        <option value="admin">admin@cashurban.com</option>
                        <option value="support">support@cashurban.com</option>
                        <option value="registration">registration@cashurban.com</option>
                        <option value="no-reply">no-reply@cashurban.com</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input type="email" name="receiver" class="form-control" name="emailto" placeholder="Email to:">
                  </div>
                  <div class="form-group">
                    <input type="text" name="subject" class="form-control" name="subject" placeholder="Subject">
                  </div>
                  <div>
                    <textarea  name="message" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </form>
              </div>
              <div class="box-footer clearfix">
                <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                  <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>
          </section>
          <!-- right col -->
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection
