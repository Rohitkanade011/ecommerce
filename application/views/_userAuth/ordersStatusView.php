<div class="d-sm-flex align-items-center justify-content-between mg-b-15 mg-lg-b-15 mg-xl-b-15">
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1 mg-b-10">
        <li class="breadcrumb-item"><?= $userRole ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $userName ?></li>
      </ol>
    </nav>
    <h4 class="mg-b-0 tx-spacing--1 text-uppercase"><?= $title ?></h4>
  </div>
  <div class="d-none d-md-block">
    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-search wd-10 mg-r-5"></i> Advance Search</button>
    <!-- <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i class="fas fa-cart-plus wd-10 mg-r-5"></i> New Order</button> -->
  </div>
</div>

<div class="row row-xs">
	<div class="col-sm-12 col-lg-12 mg-b-15 mg-lg-b-15 mg-xl-b-15 collapse" id="collapseExample">
		<div class="card card-body">
				<form action="">
				
				<div class="row">
					<div class="col-md-3">
							<div class="form-group">
								<label for="sr-feild">Search Field</label>
			          <input type="text" class="form-control <?php if(form_error('username')){ echo 'border-danger'; }else if(set_value('username')!=''){echo 'border-success';} ?>" name="username" value="<?= set_value('username'); ?>" placeholder="Oder ID | Email" id="sr-feild">
			          <div class="error-field"><?= form_error('username'); ?></div>
			        </div>
					</div>

					<div class="col-md-3">
							<div class="form-group">
								<label for="sr-invoice">Invoice No</label>
			          <input type="text" class="form-control <?php if(form_error('username')){ echo 'border-danger'; }else if(set_value('username')!=''){echo 'border-success';} ?>" name="username" value="<?= set_value('username'); ?>" placeholder="Enter Invoice No" id="sr-invoice">
			          <div class="error-field"><?= form_error('username'); ?></div>
			        </div>
					</div>

					<div class="col-md-3">
						<label for="pay-status">Select Payments Status</label>
	          <select class="form-control select2 selectp ad-se" id="pay-status" multiple="multiple">
              <option value="All" selected>All Payments Statuses</option>
              <option value="Firefox">Awaiting</option>
              <option value="Chrome">Authorized</option>
              <option value="Safari">Partially Paid</option>
              <option value="Opera">Paid</option>
              <option value="Internet Explorer">Declined</option>
              <option value="Internet Explorer">Cancelled</option>
              <option value="Internet Explorer">Refunded</option>
            </select>
					</div>

					<div class="col-md-3">
						<label for="pay-status2">Select Payments Status</label>
	          <select class="form-control select2 selectp ad-se" id="pay-status2" multiple="multiple">
              <option value="All" selected>All Payments</option>
              <option value="Firefox">Awaiting</option>
              <option value="Chrome" selected>Authorized</option>
              <option value="Safari">Partially Paid</option>
              <option value="Opera">Paid</option>
              <option value="Internet Explorer">Declined</option>
              <option value="Internet Explorer">Cancelled</option>
              <option value="Internet Explorer">Refunded</option>
            </select>
					</div>

					<div class="col-md-4">
							<div class="form-group">
								<label for="reportrange">Search With Date</label>
								<div id="reportrange" class="form-control">
								    <i class="fa fa-calendar"></i>&nbsp;
								    <span></span> <i class="fa fa-caret-down"></i>
								</div>
			        </div>
					</div>

					<div class="col-md-8">
							<div class="form-group">
								<label for="sr-payid">Payment Transaction ID</label>
			          <input type="text" class="form-control <?php if(form_error('username')){ echo 'border-danger'; }else if(set_value('username')!=''){echo 'border-success';} ?>" name="username" value="<?= set_value('username'); ?>" placeholder="Enter Payment ID" id="sr-payid">
			          <div class="error-field"><?= form_error('username'); ?></div>
			        </div>
					</div>

					<!-- More Filer -->
					<div class="col-md-6 mr-filter mg-b-15 mg-lg-b-15 mg-xl-b-15 hide">
							<fieldset class="form-fieldset">
							  <legend>Customer Information</legend>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Enter Customer Name">
							  </div>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Enter Customer Zip / Postal Code">
							  </div>
							</fieldset>
					</div>
					<div class="col-md-6 mr-filter mg-b-15 mg-lg-b-15 mg-xl-b-15 hide">
							<fieldset class="form-fieldset">
							  <legend>Product Information</legend>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Enter Product SKU">
							  </div>
							  <div class="form-group">
									<div class="input-group">
									  <div class="input-group-prepend">
									    <div class="input-group-text">
									      <div class="custom-control custom-checkbox pd-l-15">
									        <input type="checkbox" class="custom-control-input" id="customCheck1">
									        <label class="custom-control-label" for="customCheck1"></label>
									      </div>
									    </div>
									  </div>
									  <input type="text" for="customCheck1" class="form-control" aria-label="Only Orders Awaiting Processing" disabled value="Only Orders Awaiting Processing">
									</div>
							  </div>
							</fieldset>
					</div>
					<!-- More Filter Ends -->

					<!-- <div class="row"> -->
					<div class="col-md-12 d-flex">
						<div class="mr-auto">
							<button type="button" id="mr-btn" class="btn btn-xs btn-link"><i class="mr-1" data-feather="plus"></i>More Filters</button>
						</div>
						<div class="ml-auto">
							<button type="submit" class="btn btn-sm btn-primary">Search</button>
						</div>
					</div>
					<!-- </div> -->
				</div>

        </form>
		</div>
	</div>
	<div class="col-sm-12 col-lg-12">
		<table id="example1" class="table">
			<thead>
				<tr>
					<th class="wd-20p">Name</th>
					<th class="wd-25p">Position</th>
					<th class="wd-20p">Office</th>
					<th class="wd-15p">Age</th>
					<th class="wd-20p">Salary</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>System Architect</td>
					<td>Edinburgh</td>
					<td>61</td>
					<td>$320,800</td>
				</tr>
				<tr>
					<td>Garrett Winters</td>
					<td>Accountant</td>
					<td>Tokyo</td>
					<td>63</td>
					<td>$170,750</td>
				</tr>
				<tr>
					<td>Ashton Cox</td>
					<td>Junior Technical Author</td>
					<td>San Francisco</td>
					<td>66</td>
					<td>$86,000</td>
				</tr>
				<tr>
					<td>Cedric Kelly</td>
					<td>Senior Javascript Developer</td>
					<td>Edinburgh</td>
					<td>22</td>
					<td>$433,060</td>
				</tr>
				<tr>
					<td>Airi Satou</td>
					<td>Accountant</td>
					<td>Tokyo</td>
					<td>33</td>
					<td>$162,700</td>
				</tr>
				<tr>
					<td>Brielle Williamson</td>
					<td>Integration Specialist</td>
					<td>New York</td>
					<td>61</td>
					<td>$372,000</td>
				</tr>
				<tr>
					<td>Herrod Chandler</td>
					<td>Sales Assistant</td>
					<td>San Francisco</td>
					<td>59</td>
					<td>$137,500</td>
				</tr>
				<tr>
					<td>Rhona Davidson</td>
					<td>Integration Specialist</td>
					<td>Tokyo</td>
					<td>55</td>
					<td>$327,900</td>
				</tr>
				<tr>
					<td>Colleen Hurst</td>
					<td>Javascript Developer</td>
					<td>San Francisco</td>
					<td>39</td>
					<td>$205,500</td>
				</tr>
				<tr>
					<td>Sonya Frost</td>
					<td>Software Engineer</td>
					<td>Edinburgh</td>
					<td>23</td>
					<td>$103,600</td>
				</tr>
				<tr>
					<td>Jena Gaines</td>
					<td>Office Manager</td>
					<td>London</td>
					<td>30</td>
					<td>$90,560</td>
				</tr>
				<tr>
					<td>Quinn Flynn</td>
					<td>Support Lead</td>
					<td>Edinburgh</td>
					<td>22</td>
					<td>$342,000</td>
				</tr>
				<tr>
					<td>Charde Marshall</td>
					<td>Regional Director</td>
					<td>San Francisco</td>
					<td>36</td>
					<td>$470,600</td>
				</tr>
				<tr>
					<td>Haley Kennedy</td>
					<td>Senior Marketing Designer</td>
					<td>London</td>
					<td>43</td>
					<td>$313,500</td>
				</tr>
				<tr>
					<td>Tatyana Fitzpatrick</td>
					<td>Regional Director</td>
					<td>London</td>
					<td>19</td>
					<td>$385,750</td>
				</tr>
				<tr>
					<td>Michael Silva</td>
					<td>Marketing Designer</td>
					<td>London</td>
					<td>66</td>
					<td>$198,500</td>
				</tr>
				<tr>
					<td>Paul Byrd</td>
					<td>Chief Financial Officer (CFO)</td>
					<td>New York</td>
					<td>64</td>
					<td>$725,000</td>
				</tr>
				<tr>
					<td>Gloria Little</td>
					<td>Systems Administrator</td>
					<td>New York</td>
					<td>59</td>
					<td>$237,500</td>
				</tr>
				<tr>
					<td>Bradley Greer</td>
					<td>Software Engineer</td>
					<td>London</td>
					<td>41</td>
					<td>$132,000</td>
				</tr>
				<tr>
					<td>Dai Rios</td>
					<td>Personnel Lead</td>
					<td>Edinburgh</td>
					<td>35</td>
					<td>$217,500</td>
				</tr>
				<tr>
					<td>Jenette Caldwell</td>
					<td>Development Lead</td>
					<td>New York</td>
					<td>30</td>
					<td>$345,000</td>
				</tr>
				<tr>
					<td>Yuri Berry</td>
					<td>Chief Marketing Officer (CMO)</td>
					<td>New York</td>
					<td>40</td>
					<td>$675,000</td>
				</tr>
				<tr>
					<td>Caesar Vance</td>
					<td>Pre-Sales Support</td>
					<td>New York</td>
					<td>21</td>
					<td>$106,450</td>
				</tr>
				<tr>
					<td>Doris Wilder</td>
					<td>Sales Assistant</td>
					<td>Sidney</td>
					<td>23</td>
					<td>$85,600</td>
				</tr>
				<tr>
					<td>Angelica Ramos</td>
					<td>Chief Executive Officer (CEO)</td>
					<td>London</td>
					<td>47</td>
					<td>$1,200,000</td>
				</tr>
				<tr>
					<td>Gavin Joyce</td>
					<td>Developer</td>
					<td>Edinburgh</td>
					<td>42</td>
					<td>$92,575</td>
				</tr>
				<tr>
					<td>Jennifer Chang</td>
					<td>Regional Director</td>
					<td>Singapore</td>
					<td>28</td>
					<td>$357,650</td>
				</tr>
				<tr>
					<td>Brenden Wagner</td>
					<td>Software Engineer</td>
					<td>San Francisco</td>
					<td>28</td>
					<td>$206,850</td>
				</tr>
				<tr>
					<td>Fiona Green</td>
					<td>Chief Operating Officer (COO)</td>
					<td>San Francisco</td>
					<td>48</td>
					<td>$850,000</td>
				</tr>
				<tr>
					<td>Shou Itou</td>
					<td>Regional Marketing</td>
					<td>Tokyo</td>
					<td>20</td>
					<td>$163,000</td>
				</tr>
				<tr>
					<td>Michelle House</td>
					<td>Integration Specialist</td>
					<td>Sidney</td>
					<td>37</td>
					<td>$95,400</td>
				</tr>
				<tr>
					<td>Suki Burks</td>
					<td>Developer</td>
					<td>London</td>
					<td>53</td>
					<td>$114,500</td>
				</tr>
				<tr>
					<td>Prescott Bartlett</td>
					<td>Technical Author</td>
					<td>London</td>
					<td>27</td>
					<td>$145,000</td>
				</tr>
				<tr>
					<td>Gavin Cortez</td>
					<td>Team Leader</td>
					<td>San Francisco</td>
					<td>22</td>
					<td>$235,500</td>
				</tr>
				<tr>
					<td>Martena Mccray</td>
					<td>Post-Sales support</td>
					<td>Edinburgh</td>
					<td>46</td>
					<td>$324,050</td>
				</tr>
				<tr>
					<td>Unity Butler</td>
					<td>Marketing Designer</td>
					<td>San Francisco</td>
					<td>47</td>
					<td>$85,675</td>
				</tr>
				<tr>
					<td>Howard Hatfield</td>
					<td>Office Manager</td>
					<td>San Francisco</td>
					<td>51</td>
					<td>$164,500</td>
				</tr>
				<tr>
					<td>Hope Fuentes</td>
					<td>Secretary</td>
					<td>San Francisco</td>
					<td>41</td>
					<td>$109,850</td>
				</tr>
				<tr>
					<td>Vivian Harrell</td>
					<td>Financial Controller</td>
					<td>San Francisco</td>
					<td>62</td>
					<td>$452,500</td>
				</tr>
				<tr>
					<td>Timothy Mooney</td>
					<td>Office Manager</td>
					<td>London</td>
					<td>37</td>
					<td>$136,200</td>
				</tr>
				<tr>
					<td>Jackson Bradshaw</td>
					<td>Director</td>
					<td>New York</td>
					<td>65</td>
					<td>$645,750</td>
				</tr>
				<tr>
					<td>Olivia Liang</td>
					<td>Support Engineer</td>
					<td>Singapore</td>
					<td>64</td>
					<td>$234,500</td>
				</tr>
				<tr>
					<td>Bruno Nash</td>
					<td>Software Engineer</td>
					<td>London</td>
					<td>38</td>
					<td>$163,500</td>
				</tr>
				<tr>
					<td>Sakura Yamamoto</td>
					<td>Support Engineer</td>
					<td>Tokyo</td>
					<td>37</td>
					<td>$139,575</td>
				</tr>
				<tr>
					<td>Thor Walton</td>
					<td>Developer</td>
					<td>New York</td>
					<td>61</td>
					<td>$98,540</td>
				</tr>
				<tr>
					<td>Finn Camacho</td>
					<td>Support Engineer</td>
					<td>San Francisco</td>
					<td>47</td>
					<td>$87,500</td>
				</tr>
				<tr>
					<td>Serge Baldwin</td>
					<td>Data Coordinator</td>
					<td>Singapore</td>
					<td>64</td>
					<td>$138,575</td>
				</tr>
				<tr>
					<td>Zenaida Frank</td>
					<td>Software Engineer</td>
					<td>New York</td>
					<td>63</td>
					<td>$125,250</td>
				</tr>
				<tr>
					<td>Zorita Serrano</td>
					<td>Software Engineer</td>
					<td>San Francisco</td>
					<td>56</td>
					<td>$115,000</td>
				</tr>
				<tr>
					<td>Jennifer Acosta</td>
					<td>Junior Javascript Developer</td>
					<td>Edinburgh</td>
					<td>43</td>
					<td>$75,650</td>
				</tr>
				<tr>
					<td>Cara Stevens</td>
					<td>Sales Assistant</td>
					<td>New York</td>
					<td>46</td>
					<td>$145,600</td>
				</tr>
				<tr>
					<td>Hermione Butler</td>
					<td>Regional Director</td>
					<td>London</td>
					<td>47</td>
					<td>$356,250</td>
				</tr>
				<tr>
					<td>Lael Greer</td>
					<td>Systems Administrator</td>
					<td>London</td>
					<td>21</td>
					<td>$103,500</td>
				</tr>
				<tr>
					<td>Jonas Alexander</td>
					<td>Developer</td>
					<td>San Francisco</td>
					<td>30</td>
					<td>$86,500</td>
				</tr>
				<tr>
					<td>Shad Decker</td>
					<td>Regional Director</td>
					<td>Edinburgh</td>
					<td>51</td>
					<td>$183,000</td>
				</tr>
				<tr>
					<td>Michael Bruce</td>
					<td>Javascript Developer</td>
					<td>Singapore</td>
					<td>29</td>
					<td>$183,000</td>
				</tr>
				<tr>
					<td>Donna Snider</td>
					<td>Customer Support</td>
					<td>New York</td>
					<td>27</td>
					<td>$112,000</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>