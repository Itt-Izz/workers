           
           
            <div class="panel panel-default" id="pan2">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Messages</h3>
                </div>
        <div class="panel-body"id="scrolTable">
      <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#inb" class="btn btn-default">Inbox <span class="badge"> 10</span></a></li>
      <li><a data-toggle="tab" href="#unread" class="btn btn-warning">Unread <span class="badge"> 2</span></a></li>
      <li><a data-toggle="tab" href="#sent" class="btn btn-success">Sent  <span class="badge"> 5</span></a></li>
      <li><a data-toggle="tab" href="#compose" class="btn btn-danger">Compose </a></li>
    </ul>

    <div class="tab-content">
      <div id="inb" class="tab-pane fade in active">
        <h3>Inbox</h3>
        
        <table class="table table-striped table-hover">
                              <tr>
                                      <th >#</th>
                                      <th >From</th>                   
                                      <th>subject</th>                   
                                      <th>Date</th>                   
                                      <th>Message</th>   
                              </tr>
                              <tr>
                                  <td>1</td>                   
                                  <td>Isaac</td>                   
                                  <td>Poster </td>                   
                                  <td>4/11/2010</td>                   
                                  <td>Beginners should learn basics first</td>              
                              </tr>
                            </table>
      </div>
      <div id="unread" class="tab-pane fade">
        <h3>Unread</h3>
                  
      </div>
      <div id="sent" class="tab-pane fade">
        <h3>Sent</h3>
        
        <table class="table table-striped table-hover">
                              <tr>
                                      <th >#</th>
                                      <th >From</th>                   
                                      <th>subject</th>                   
                                      <th>Date</th>                   
                                      <th>Message</th>   
                              </tr>
                    </table>
      </div>
      <div id="compose" class="tab-pane fade">
        <form action="" role="form"  class="form-inline">
              <div class="form-group"><br><br>
                      <label>To:      &nbsp; &nbsp; &nbsp;</label>
                        <select class="form-control" id="sel">
                          <option>Isaac </option>
                          <option>John</option>
                        </select>
                </div><br><br>
                <div class="form-group">
                        <label>From:   &nbsp; &nbsp; &nbsp; </label><input type="text"class="form-control">
                </div><br><br>
                <div class="form-group">
                      <label>Subjects  &nbsp; &nbsp; &nbsp;</label> <input type="text"class="form-control">
                </div><br><br>
                <div class="form-group">
                      <label for="usr">Message </label><br>
                      <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> 
              </div><br>
                    &nbsp; &nbsp; &nbsp; 
                    <button id="btn" class="btn btn-success">Submit</button><br>
            </form>
                      
      </div>
    </div>
  </div>

  <div class="alert alert-success">
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>

