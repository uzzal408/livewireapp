<div class="row">
    <div class="col-md-3"></div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-4 centered-form" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    <form wire:submit.prevent="submit">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="form.name"  id="name" class="form-control input-sm" placeholder="Enter Name">
                                    @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" wire:model="form.email" id="email" class="form-control input-sm" placeholder="Email Address">
                            @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" wire:model="form.password" id="password" class="form-control input-sm" placeholder="Password">
                                    @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password"  wire:model="form.password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Register" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    <style>
        .centered-form{
            margin-top: 60px;
        }
        .centered-form .panel{
            padding: 50px;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }

    </style>
    </div>
