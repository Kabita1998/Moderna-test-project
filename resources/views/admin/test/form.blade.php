
                    <div class="col-6">
                    @php
                    $testErrorClass = $errors->has('name')?'is-invalid':'';
                    @endphp
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control {{$testErrorClass}}" value="" name="name" placeholder=" Enter Name" id="name">
                    <div class="invalid-feedback">
                        @if($errors->has('name'))
                        {{ $errors->first('name')}}
                        @endif
                    </div>
                    </div>

                <div class="col-6">
                    @php
                    $testErrorClass = $errors->has('gender')?'is-invalid':'';
                    @endphp
                    
                    <label for="gender_id" class="form-label"> select Gender <span class="text-danger">*</span></label>
                    <select name="gender"  class="form-control {{$testErrorClass}}" placeholder="Enter Gender">
                        <option value=""> --select--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>                
                    <div class="invalid-feedback">
                        @if($errors->has('gender'))
                        {{ $errors->first('gender')}}
                        @endif
                    </div>
                </div>

                <div class="col-6">
                @php
                    $testErrorClass = $errors->has('phone')?'is-invalid':'';
                    @endphp
                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="phone" class="form-control {{$testErrorClass}}" value="" name="phone" placeholder="Enter Phone Number"id="phone">
                <div class="invalid-feedback">
                @if($errors->has('phone'))
                        {{ $errors->first('phone')}}
                        @endif
                </div>
                </div>

                <div class="col-6">
                @php
                    $testErrorClass = $errors->has('email')?'is-invalid':'';
                    @endphp
                                <label for="email" class="form-label">E-Mail Address</label>
                                <div class="ms-auto position-relative">
                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"></i></div>
                                    <input type="email" class="form-control {{$testErrorClass}}" id="email" name="email" placeholder="Enter E-Mail Address">
                                    <div class="invalid-feedback">
                                    @if($errors->has('email'))
                        {{ $errors->first('email')}}
                        @endif
                            </div>
                            </div>
                            </div>

            
                <div class="col-6">                             
                @php
                    $testErrorClass = $errors->has('address')?'is-invalid':'';
                    @endphp
                    <label for="address" class="form-label">Address </label>
                    <div class="ms-auto position-relative">
                    <input type="text" class="form-control {{$testErrorClass}}" value="" name="address"placeholder="Enter Address" id="address">
                    <div class="invalid-feedback">
                    @if($errors->has('address'))
                        {{ $errors->first('address')}}
                        @endif
                    </div>
                    </div>
                </div>


                <div class="col-6">
                @php
                    $testErrorClass = $errors->has('dob')?'is-invalid':'';
                    @endphp
                    <label for="dob" class="form-label">Date of birth </label>
                    <div class="ms-auto position-relative">
                    <input type="phone" class="form-control {{$testErrorClass}}" value="" name="dob"placeholder="yyyy/dd/mm" id="dob">
                    <div class="invalid-feedback">
                    @if($errors->has('dob'))
                        {{ $errors->first('dob')}}
                        @endif
                </div>
                </div>
                </div>


                <div class="col-4">
                @php
                    $testErrorClass = $errors->has('education_background')?'is-invalid':'';
                    @endphp
                    <label for="education_background" class="form-label">Education Background </label>
                    
                    <select name="education_background"  class="form-control {{$testErrorClass}}" placeholder="Enter Education Background" >
                        <option value=""> --select--</option>
                        <option value="Tribhuvan University">Tribhuvan University</option>
                        <option value="Pokhara University">Pokhara University</option>
                        <option value="Kathmandu University">Kathmandu University</option>
                    </select>
                    <div class="invalid-feedback">
                        @if($errors->has('education_background'))
                        {{ $errors->first('education_background')}}
                        @endif
                </div>
                </div>
                

                <div class="col-4">
                @php
                    $testErrorClass = $errors->has('nationality')?'is-invalid':'';
                    @endphp
                    <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                    <div class="ms-auto position-relative">
                    <input type="text" class="form-control {{$testErrorClass}}" value="" name="nationality"placeholder="Enter Nationality" id="nationality">
                    <div class="invalid-feedback">
                        @if($errors->has('nationality'))
                        {{ $errors->first('nationality')}}
                        @endif
                    </div>
                    </div>
                    </div>
                <div class="text-start">
                    <button type="submit" class="btn btn-success px-4">Save Information</button>
                </div>
                


