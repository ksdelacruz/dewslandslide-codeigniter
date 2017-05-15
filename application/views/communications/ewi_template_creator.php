<!-- Chatterbox Scripts -->
<link rel="stylesheet" type="text/css" href="../css/dewslandslide/public_alert/monitoring_events_all.css">

<script src="/js/third-party/handlebars.js"></script>
<script src="/js/third-party/moment-locales.js"></script>
<script src="/js/third-party/notify.min.js"></script>
<script src="/js/dewslandslide/communications/dewsewi_template.js"></script>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <h1>DEWS-Landslide Early Warning Information <small>Template Creator</small></h1>
		</div>
		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" id="key_input_tab" href="#key-inputs">Key Inputs Template</a></li>
		    <li><a data-toggle="tab" id="message_backbone_tab" href="#message-backbone">Message Backbone Template</a></li>
		</ul>
		<div class="tab-content">
			<div id="key-inputs" class="tab-pane fade in active">
		        <div class="row" style="margin:10px;">
		            <div class="col-md-12">
		                <div class="table-responsive">          
		                    <table class="table" id="template_table" style="width:100%;">
		                        <thead>
		                            <tr></tr>
		                        </thead>
		                        <tfoot>
		                            <tr></tr>
		                        </tfoot>
		                    </table>
		                </div>
		            </div>
		        </div>
		        <div class="row" style="margin:10px;">
		        	<div class="col-md-12" style="text-align: center;">
		        		<input type="button" class="btn btn-primary" id="add_template" value="ADD TEMPLATE">
		        	</div>
		        </div>
			</div>
			<div id="message-backbone" class="tab-pane fade in">
				<div class="panel panel-danger">
					<div class="panel-heading" style="text-align: center;">Please refrain from deleting the <b>"KEY INPUTS" (%%SBMP%%, %%NOW_TOM%%, %%PANAHON%%.. etc..)</b> of the template.<br>
						For the list of Key Inputs you can refer <a href="#">to this link.</a>
					</div>
				</div>
		        <div class="row" style="margin:10px;">
		            <div class="col-md-12">
		                <div class="table-responsive">          	
		                    <table class="table" id="backbone_table" style="width:100%;">
		                        <thead>
		                            <tr></tr>
		                        </thead>
		                        <tfoot>
		                            <tr></tr>
		                        </tfoot>
		                    </table>
		                </div>
		            </div>
		        </div>
		        <div class="row" style="margin:10px;">
		        	<div class="col-md-12" style="text-align: center;">
		        		<input type="button" class="btn btn-primary" id="add_backbone" value="ADD MESSAGE BACKBONE">
		        	</div>
		        </div>
			</div>
		</div>
    </div>
</div>

<div id="template_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="modal-title">Create Template</h4>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="row form-group">
						<div class="col-md-4">
							<label for="alert_lvl">Alert Level: </label>
							<select class="btn btn-default form-control" name="alert_lvl" id="alert_lvl" required="true">
							  <option value="Alert 1">Alert 1</option>
							  <option value="Alert 2">Alert 2</option>
							  <option value="Alert 3">Alert 3</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="internal_alert">Internal Alert: </label>
							<input type="text" class="form-control" name="internal_alert" id="internal_alert" required="true">
						</div>
						<div class="col-md-5">
							<label for="internal_alert">Backbone Message Category: </label>
							<input type="text" class="form-control" name="bb_scenario" id="bb_scenario" required="true">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="scenario">Possible Scenario</label>
							<textarea name="scenario" id="scenario" cols="30" rows="10" class="form-control" style="overflow:auto;resize:none" required="true"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="response">Recommended Response</label>
							<textarea name="response" id="response" cols="30" rows="10" class="form-control" style="overflow:auto;resize:none" required="true"></textarea>		
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="submit_template">Create</button>
			</div>
		</div>
	</div>
</div>

<div id="delete_template_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="modal-title">Delete Template</h4>
			</div>
			<div class="modal-body">
				<div class="panel panel-danger">
					<div class="panel-heading">Are you sure you want to delete this template?</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea name="delete-template" id="delete-template" cols="30" rows="10" class="form-control" style="resize:none" disabled></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" id="delete_template">DELETE</button>
			</div>
		</div>
	</div>
</div>

<div id="backbone_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="modal-title">Create Message Backbone</h4>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="row form-group">
						<div class="col-md-8">
						<label for="category">Category: </label>
							<input class="form-control" type="text" id="category" placeholder="Ex. GroundMeasurement">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="msg_backbone">Message Backbone: </label>
							<textarea class="form-control" name="msg_backbone" id="msg_backbone" cols="30" rows="10" style="overflow:auto;resize:none"></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label for="backbone_preview">Preview: </label>
							<textarea class="form-control" name="backbone_preview" id="backbone_preview" cols="30" rows="10" style="overflow:auto;resize:none" disabled></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="submit_backbone">Create</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  first_name = "<?php echo $first_name; ?>";
  tagger_user_id = "<?php echo $user_id; ?>";
</script>