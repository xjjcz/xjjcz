<style type="text/css">
	publiccom {
		background: #000;
		margin: 0;
		padding: 8px 20px 24px;
	}
</style>

<div id="public_com" >

	<div class="row" style="height:40px;">
		<div class="col-md-12">
			<!-- PAGE CONTENT BEGINS -->

			<div class="col-md-3">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right" for="form-field-3"> 机构代码：</label>

					<div class="col-md-7">
						<label id='factotyno' style="font-size:15px; margin-top:3px;">
							${item.factoryNo1} </label>
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="form-group">
					<label class="col-md-4 control-label no-padding-right" for="form-field-1"> 企业名称： </label>
					<div class="col-md-8">
						<label id='factoryName' style="font-size:15px; margin-top:3px;">
							${item.factoryName}</label>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="col-md-5 control-label no-padding-right" for="form-field-3"> 污染源类型：</label>

					<div class="col-md-7">
						<label id='sourceType' style="font-size:15px; margin-top:3px;">
							${item.sourceType} </label>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>