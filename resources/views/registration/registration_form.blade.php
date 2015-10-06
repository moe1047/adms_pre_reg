
<div class="panel panel-default">
    <div class="panel-body">

        <div class="panel panel-default">
            <div class="panel-heading">Personal Information</div>
            <div class="panel-body">
                <!--first_name  textfield-->
                <div class="form-group col-md-4">
                    {!! Form::label('first_name','First name:',['class' => 'control-label']) !!}
                    {!! Form::text('first_name',NULL,['class'=>'form-control']) !!}
                </div>
                <!--mid_name  textfield-->
                <div class="form-group col-md-4">
                    {!! Form::label('mid_name','Middle name:',['class' => 'control-label']) !!}
                    {!! Form::text('mid_name',NULL,['class'=>'form-control']) !!}
                </div>
                <!--last_name  textfield-->
                <div class="form-group col-md-4">
                    {!! Form::label('last_name','Last name:',['class' => 'control-label']) !!}
                    {!! Form::text('last_name',NULL,['class'=>'form-control']) !!}
                </div>

                <!-- gender radiobuttons-->
                <div class="form-group col-md-6">
                    {!! Form::label('Gender','Gender:',['class' => 'control-label']) !!}

                    <div class="form-control">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender" value="m"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender" value="f"> Female
                        </label>
                    </div>
                </div>

                <!--DOB  textfield-->
                <div class="form-group col-md-6">
                    {!! Form::label('DOB','DOB:',['class' => 'control-label']) !!}
                    {!! Form::date('DOB',NULL,['class'=>'form-control']) !!}
                </div>

                <!--region_id  dropdown-->
                <div class="form-group col-md-6">
                    {!! Form::label('region_id','Region:',['class' => 'control-label']) !!}
                    {!! Form::select('region_id', $regions,NULL,['class' => 'form-control']); !!}
                </div>

                <!--city datalist-->
                <div class="form-group col-md-6">
                    {!! Form::label('city','City:',['class' => 'control-label']) !!}
                    {!! Form::text('city',NULL,['class'=>'form-control','list'=>'cities']) !!}
                    <datalist id="cities">
                        <option value="togdheer">
                        <option value="maroodi-jeex">
                    </datalist>
                </div>

                <!--school_id  dropdown-->
                <div class="form-group col-md-3">
                    {!! Form::label('school_id','School:',['class' => 'control-label']) !!}
                    {!! Form::select('school_id', $schools,NULL,['class' => 'form-control']); !!}
                </div>

                <!--roll_no  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('roll_no','Roll Number:',['class' => 'control-label']) !!}
                    {!! Form::text('roll_no',NULL,['class'=>'form-control']) !!}
                </div>

                <!--certificate  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('certificate_no','Certificate S#:',['class' => 'control-label']) !!}
                    {!! Form::text('certificate_no',NULL,['class'=>'form-control']) !!}
                </div>

                <!--academic_year  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('academic_year','Academic Year:',['class' => 'control-label']) !!}
                    {!! Form::text('academic_year',NULL,['class'=>'form-control','placeholder' => 'Year - Year']) !!}
                </div>

                <!--grade  textfield-->
                <div class="form-group col-md-2">
                    {!! Form::label('grade','Grade:',['class' => 'control-label']) !!}
                    {!! Form::text('grade',NULL,['class'=>'form-control','placeholder' => 'A / B / C']) !!}
                </div>

                <!--email  textfield-->
                <div class="form-group col-md-5">
                    {!! Form::label('email','Email:',['class' => 'control-label']) !!}
                    {!! Form::email('email',NULL,['class'=>'form-control','placeholder' => 'example@email.com']) !!}
                </div>

                <!--mobile  textfield-->
                <div class="form-group col-md-5">
                    {!! Form::label('mobile','Mobile / Tell:',['class' => 'control-label']) !!}
                    {!! Form::number('mobile',NULL,['class'=>'form-control','placeholder' => '+252 (63) 8765446']) !!}
                </div>

            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Registration Information</div>
            <div class="panel-body">
                <!--on_basis_of  dropdown-->

                <div class="form-group col-md-3">
                    {!! Form::label('on_basis_of','Requested on the basis of:',['class' => 'control-label']) !!}
                    {!! Form::select('on_basis_of', array(
                    'Secondary School Certificate'=>'Secondary School Certificate',
                    'Preparatory Grade Points'=>'Preparatory Grade Points',
                    'Diploma(10+3)'=>'Diploma(10+3)',
                    'Transfer from other recognized Higher institutions'=>'Transfer from other recognized Higher institutions'
                    ),NULL,['class' => 'form-control']); !!}
                </div>

                <!--faculty  dropdown-->
                <div class="form-group col-md-3">
                    {!! Form::label('faculty','Faculty:',['class' => 'control-label']) !!}
                    {!! Form::select('faculty', $faculties,NULL,['class' => 'form-control']); !!}
                </div>

                <!--department  dropdown-->
                <div class="form-group col-md-3">
                    {!! Form::label('department_id','Department:',['class' => 'control-label']) !!}
                    {!! Form::select('department_id', array(),NULL,['class' => 'form-control']); !!}
                </div>

                <!--session  dropdown-->
                <div class="form-group col-md-3">
                    {!! Form::label('session','session / Shift:',['class' => 'control-label']) !!}
                    {!! Form::select('session', array('morning'=>'Morning','afternoon'=>'Afternoon','evening'=>'Evening'),NULL,['class' => 'form-control']); !!}
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Payment Information</div>
            <div class="panel-body">

                <!--reciept_no  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('receipt_no','Receipt No:',['class' => 'control-label']) !!}
                    {!! Form::text('receipt_no',NULL,['class'=>'form-control']) !!}
                </div>

                <!--payment_type  dropdown-->
                <div class="form-group col-md-3">
                    {!! Form::label('payment_type','Payment type:',['class' => 'control-label']) !!}
                    {!! Form::select('payment_type', array(
                    'dahabshiil'=>'Dahabshiil','salama bank'=>'Salama bank','ZAAD'=>'ZAAD','e-dahab'=>'E-Dahab'
                    ),NULL,['class' => 'form-control','onchange'=>'check_payment(this.value)']); !!}
                </div>

                <!--transaction_no  textfield-->
                <div class="form-group col-md-3" id="transaction_no">
                    {!! Form::label('transaction_no','Transaction No:',['class' => 'control-label']) !!}
                    {!! Form::text('transaction_no',NULL,['class'=>'form-control']) !!}
                </div>

                <!--registration_amount  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('registration_amount','Registration Amount:',['class' => 'control-label']) !!}
                    {!! Form::number('registration_amount',NULL,['class'=>'form-control']) !!}
                    <p class="help-block">Note: No doller sign is required.</p>
                </div>

                <!--admission_no  textfield-->
                <div class="form-group col-md-3">
                    {!! Form::label('admission_no','Admission No:',['class' => 'control-label']) !!}
                    {!! Form::number('admission_no',NULL,['class'=>'form-control']) !!}
                </div>
                <!--photo  textfield-->
                <div class="form-group col-md-4">
                    {!! Form::label('image','Upload image:',['class' => 'control-label']) !!}
                    {!! Form::file('image',['class'=>'form-control']); !!}
                </div>

                <!--remark  textfield-->
                <div class="form-group col-md-5">
                    {!! Form::label('remark','Remark:',['class' => 'control-label']) !!}
                    {!! Form::textarea('remark',NULL,['class'=>'form-control','rows'=>'3']) !!}
                </div>


            </div>
        </div>
        <div class="col-lg-5 col-lg-offset-5">
            {!! Form::submit('Register',['class'=>'btn btn-default btn-lg  col-mid-4']) !!}
        </div>
    </div>
</div>
