<h3 style="width:100%">Thông tin người đặt hàng</h3>
              <form method="post" action="index.php?ctrl=cart&action=checkout">
                  <div class="row">
                      <div class="col-md-4">
                          Họ va ten
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="fullName" class="form-control" required/>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          Email:
                      </div>
                      <div class="col-md-8">
                          <input type="email" name="email" required/>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          Địa chỉ:
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="address" class="form-control" required/>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-4">
                          So điện thoại:
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="phone" class="form-control" required/>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-12">
                          <button type="submit" name="submit" class="btn btn-primary">
                             <a href="index.php?act=cart&ctrl=put"> Đặt hàng</a>
                          </button>
                      </div>
                  </div>
                  <br/>
              </form>