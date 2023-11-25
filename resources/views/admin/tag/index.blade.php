@extends('layouts.backend.app')

<script>
    let dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];




(function($) {
     "use strict"
    //example 1
    var table = $('#example').DataTable({
        createdRow: function ( row, data, index ) {
           $(row).addClass('selected')
        } ,
		language: {
			paginate: {
			  next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
			  previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
			}
		  }
    });

    table.on('click', 'tbody tr', function() {
    var $row = table.row(this).nodes().to$();
    var hasClass = $row.hasClass('selected');
    if (hasClass) {
        $row.removeClass('selected')
    } else {
        $row.addClass('selected')
    }
    })

    table.rows().every(function() {
    this.nodes().to$().removeClass('selected')
    });



    //example 2
    var table2 = $('#example2').DataTable( {
        createdRow: function ( row, data, index ) {
            $(row).addClass('selected')
        },

        "scrollY":        "42vh",
        "scrollCollapse": true,
        "paging":         false
    });

    table2.on('click', 'tbody tr', function() {
        var $row = table2.row(this).nodes().to$();
        var hasClass = $row.hasClass('selected');
        if (hasClass) {
            $row.removeClass('selected')
        } else {
            $row.addClass('selected')
        }
    })

    table2.rows().every(function() {
        this.nodes().to$().removeClass('selected')
    });

	// dataTable1
	var table = $('#dataTable1').DataTable({
		searching: false,
		paging:true,
		select: false,
		lengthChange:false ,

	});
	// dataTable2
	var table = $('#dataTable2').DataTable({
		searching: false,
		paging:true,
		select: false,
		lengthChange:false ,

	});
	// dataTable3
	var table = $('#dataTable3').DataTable({
		searching: false,
		paging:true,
		select: false,
		lengthChange:false ,

	});
	// dataTable4
	var table = $('#dataTable4').DataTable({
		searching: false,
		paging:true,
		select: false,
		lengthChange:false,

	});

	// dataTable5
	var table = $('#example5').DataTable({
		searching: false,
		paging:true,
		select: false,
		info: true,
		lengthChange:false ,
		language: {
			paginate: {
			  previous: '<i class="fas fa-angle-double-left"></i>',
			  next: '<i class="fas fa-angle-double-right"></i>'
			}
		  }

	});
	var table = $('#example7').DataTable({
		searching: false,
		paging:true,
		select: false,
		info: true,
		lengthChange:false ,
		language: {
			paginate: {
			  previous: '<i class="fas fa-angle-double-left"></i>',
			  next: '<i class="fas fa-angle-double-right"></i>'
			}
		  }

	});

	// dataTable6
		var table = $('#example6').DataTable({
			searching: false,
			paging:true,
			select: false,
			info: false,
			lengthChange:false ,
			language: {
			paginate: {
			  previous: "Previous",
			  next: "Next"
			}
		  }

		});

	// table row
	var table = $('#dataTable1, #dataTable2, #dataTable3, #dataTable4,  #example3, #example4 ').DataTable({
		language: {
			paginate: {
			  next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
			  previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
			}
		  }
	});
	$('#example tbody').on('click', 'tr', function () {
		var data = table.row( this ).data();
	});



})(jQuery);

</script>
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div><table id="example" class="display dataTable" style="min-width: 845px" role="grid" aria-describedby="example_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 178.641px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 276.828px;">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 135.688px;">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 55.9375px;">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 116.797px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108.234px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example2_wrapper" class="dataTables_wrapper"><div id="example2_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example2"></label></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1022.62px; padding-right: 0px;"><table class="display dataTable" style="width: 1022.62px; margin-left: 0px;" role="grid"><thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 180.922px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 262.453px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 134.25px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 54.5781px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 122.422px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 110.5px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 42vh; width: 100%;"><table id="example2" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example2_info"><thead>
                                    <tr role="row" style="height: 0px;"><th class="sorting_asc" aria-controls="example2" rowspan="1" colspan="1" style="width: 180.922px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="example2" rowspan="1" colspan="1" style="width: 262.453px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="example2" rowspan="1" colspan="1" style="width: 134.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="example2" rowspan="1" colspan="1" style="width: 54.5781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="example2" rowspan="1" colspan="1" style="width: 122.422px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="example2" rowspan="1" colspan="1" style="width: 110.5px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </thead><tfoot>
                                    <tr style="height: 0px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 171.172px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 252.703px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 124.5px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 44.8281px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 112.672px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 100.75px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </tfoot>

                                <tbody>

























































                                <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr><tr class="even" role="row">
                                        <td class="sorting_1">Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr><tr class="odd" role="row">
                                        <td class="sorting_1">Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr></tbody>

                            </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1022.62px; padding-right: 0px;"><table class="display dataTable" style="width: 1022.62px; margin-left: 0px;" role="grid"><tfoot>
                                    <tr><th rowspan="1" colspan="1" style="width: 171.172px;">Name</th><th rowspan="1" colspan="1" style="width: 252.703px;">Position</th><th rowspan="1" colspan="1" style="width: 124.5px;">Office</th><th rowspan="1" colspan="1" style="width: 44.8281px;">Age</th><th rowspan="1" colspan="1" style="width: 112.672px;">Start date</th><th rowspan="1" colspan="1" style="width: 100.75px;">Salary</th></tr>
                                </tfoot></table></div></div></div><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example3_length"><label>Show <select name="example3_length" aria-controls="example3" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="example3_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example3"></label></div><table id="example3" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example3_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 35px;"></th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 116.188px;">Name</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 139.891px;">Department</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 51.2031px;">Gender</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Education: activate to sort column ascending" style="width: 105.141px;">Education</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 85.8906px;">Mobile</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 121.906px;">Email</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 89.125px;">Joining Date</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 49.0312px;">Action</th></tr>
                                </thead>
                                <tbody>






























                                <tr role="row" class="odd">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/07/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2009/01/12</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                        <td>Cedric Kelly</td>
                                        <td>Developer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2012/03/29</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                        <td>Brielle Williamson</td>
                                        <td>Specialist</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2012/08/06</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2010/10/14</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2009/09/15</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2008/12/13</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table><div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><a class="paginate_button previous disabled" aria-controls="example3" data-dt-idx="0" tabindex="0" id="example3_previous"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a><span><a class="paginate_button current" aria-controls="example3" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example3" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example3" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="example3" data-dt-idx="4" tabindex="0" id="example3_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fees Collection</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example4_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example4"></label></div><table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example4_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Roll No: activate to sort column descending" style="width: 67.5px;">Roll No</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 148.172px;">Student Name</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Invoice number: activate to sort column ascending" style="width: 140.562px;">Invoice number</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Fees Type : activate to sort column ascending" style="width: 91.9062px;">Fees Type </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Payment Type : activate to sort column ascending" style="width: 127px;">Payment Type </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 76.0156px;">Status </th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 95.5156px;">Date</th><th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 72.9531px;">Amount</th></tr>
                                </thead>
                                <tbody>






























                                <tr role="row" class="odd">
                                        <td class="sorting_1">01</td>
                                        <td>Tiger Nixon</td>
                                        <td>#54605</td>
                                        <td>Library</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2011/04/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">02</td>
                                        <td>Garrett Winters</td>
                                        <td>#54687</td>
                                        <td>Library</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2011/07/25</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">03</td>
                                        <td>Ashton Cox</td>
                                        <td>#35672</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/01/12</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">04</td>
                                        <td>Cedric Kelly</td>
                                        <td>#57984</td>
                                        <td>Annual</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2012/03/29</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">05</td>
                                        <td>Airi Satou</td>
                                        <td>#12453</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-warning">Panding</span></td>
                                        <td>2008/11/28</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">06</td>
                                        <td>Brielle Williamson</td>
                                        <td>#59723</td>
                                        <td>Tuition</td>
                                        <td>Cash</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2012/12/02</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">07</td>
                                        <td>Herrod Chandler</td>
                                        <td>#98726</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2012/08/06</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">08</td>
                                        <td>Rhona Davidson</td>
                                        <td>#98721</td>
                                        <td>Library</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2010/10/14</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">09</td>
                                        <td>Colleen Hurst</td>
                                        <td>#54605</td>
                                        <td>Annual</td>
                                        <td>Cheque</td>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <td>2009/09/15</td>
                                        <td><strong>120$</strong></td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">10</td>
                                        <td>Sonya Frost</td>
                                        <td>#98734</td>
                                        <td>Tuition</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge light badge-danger">Udpaid</span></td>
                                        <td>2008/12/13</td>
                                        <td><strong>120$</strong></td>
                                    </tr></tbody>
                            </table><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><a class="paginate_button previous disabled" aria-controls="example4" data-dt-idx="0" tabindex="0" id="example4_previous"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a><span><a class="paginate_button current" aria-controls="example4" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example4" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example4" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="example4" data-dt-idx="4" tabindex="0" id="example4_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patient</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example5_wrapper" class="dataTables_wrapper no-footer"><table id="example5" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example5_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="




                                        : activate to sort column descending" style="width: 37.2812px;">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Patient ID: activate to sort column ascending" style="width: 72.9844px;">Patient ID</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Date Check in: activate to sort column ascending" style="width: 146.531px;">Date Check in</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Patient Name: activate to sort column ascending" style="width: 100.891px;">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Doctor Assgined: activate to sort column ascending" style="width: 122.547px;">Doctor Assgined</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Disease: activate to sort column ascending" style="width: 94.5625px;">Disease</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 100.891px;">Status</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Room no: activate to sort column ascending" style="width: 68.875px;">Room no</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 48.8125px;">Action</th></tr>
                                </thead>
                                <tbody>




















                                <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td>#P-00001</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Tiger Nixon</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-001</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </td>
                                        <td>#P-00002</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Garrett Winters</td>
                                        <td>Dr. Cedric</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-002</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </td>
                                        <td>#P-00003</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Recovered
                                            </span>
                                        </td>
                                        <td>AB-003</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
                                                <label class="form-check-label" for="customCheckBox5"></label>
                                            </div>
                                        </td>
                                        <td>#P-00004</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-004</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </td>
                                        <td>#P-00005</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Cedric</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-005</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </td>
                                        <td>#P-00006</td>
                                        <td>28/02/2020, 12:42 AM</td>
                                        <td>Ashton Cox</td>
                                        <td>Dr. Rhona</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-006</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </td>
                                        <td>#P-00007</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-007</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
                                                <label class="form-check-label" for="customCheckBox9"></label>
                                            </div>
                                        </td>
                                        <td>#P-00008</td>
                                        <td>29/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Garrett </td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                In Treatment
                                            </span>
                                        </td>
                                        <td>AB-008</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox10" required="">
                                                <label class="form-check-label" for="customCheckBox10"></label>
                                            </div>
                                        </td>
                                        <td>#P-00009</td>
                                        <td>25/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Cold &amp; Flu</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-009</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="form-check custom-checkbox ms-2">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
                                                <label class="form-check-label" for="customCheckBox11"></label>
                                            </div>
                                        </td>
                                        <td>#P-00010</td>
                                        <td>26/02/2020, 12:42 AM</td>
                                        <td>Airi Satou</td>
                                        <td>Dr. Rhona</td>
                                        <td>Sleep Problem</td>
                                        <td>
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                New Patient
                                            </span>
                                        </td>
                                        <td>AB-010</td>
                                        <td>
                                            <div class="dropdown ms-auto text-end">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Accept Patient</a>
                                                    <a class="dropdown-item" href="#">Reject Order</a>
                                                    <a class="dropdown-item" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table><div class="dataTables_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example5_paginate"><a class="paginate_button previous disabled" aria-controls="example5" data-dt-idx="0" tabindex="0" id="example5_previous"><i class="fas fa-angle-double-left"></i></a><span><a class="paginate_button current" aria-controls="example5" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example5" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="example5" data-dt-idx="3" tabindex="0" id="example5_next"><i class="fas fa-angle-double-right"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
