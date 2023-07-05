                <h1 class="display-4">Create a New Delivery</h1>
                <p>Fill and submit this form to create a delivery</p>

                <hr>

                <form action="/delivery/index" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="customer_name">Name</label>
                            <input type="text" id="customer_name" class="form-control" name="customer_name"
                                   placeholder="Enter your name" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="phone_number">Phone number</label>
                            <input type="text" id="phone_number" class="form-control" name="phone_number"
                                   placeholder="Enter your phone number" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" name="email"
                                   placeholder="Enter your email" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="sender_address">Your address</label>
                            <input type="text" id="sender_address" class="form-control" name="sender_address"
                                   placeholder="Enter your address" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="delivery_address">Delivery address</label>
                            <input type="text" id="delivery_address" class="form-control" name="delivery_address"
                                   placeholder="Enter your address" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="width">Width of a package</label>
                            <input type="text" id="width" class="form-control" name="width"
                                   placeholder="Enter the width of your package" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="height">Height of a package</label>
                            <input type="text" id="height" class="form-control" name="height"
                                   placeholder="Enter the height of your package" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="lenght">Length of a package</label>
                            <input type="text" id="lenght" class="form-control" name="lenght"
                                   placeholder="Enter the lenght of your package" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="weight">Weight of a package</label>
                            <input type="text" id="weight" class="form-control" name="weight"
                                   placeholder="Enter the weight of your package" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="weight">Choose your delivery option</label>
                            <li>
                                <select name="post_office" id="post_office">
                                  <option value="nova_post">Nova Post</option>
                                  <option value="ukr_post">Ukr Post</option>
                                  <option value="justin_post">Justin Post</option>
                                </select>
                            </li>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Post
                            </button>
                        </div>
                    </div>
                </form>
