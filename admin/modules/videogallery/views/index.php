<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li> 
        <li><a href="javascript:void(0)" ng-click="refresh_albums()">Video Gallery</a></li>
	</ol>
</div>

<div class="clearfix"></div>
<br>
<div class="col-sm-4">
 <form class="admin-form" name="form" id="form" method="post" action="">
 <div id="validation"></div>
 <br>
      
      <div class="form-group">
        <label for="video_url">YouTube/Vimeo Embed URL</label>
        <input type="text" class="form-control" id="video_url" name="video_url" ng-model="x.video_url" placeholder="https://www.youtube.com/embed/XXXX" required>
        <p class="help-block" style="font-size:10px">Paste the embed URL for your video.</p>
      </div>
      <div class="form-group">
        <label for="city">City Name (Optional)</label>
        <input type="text" class="form-control" id="city" name="city" ng-model="x.city" placeholder="e.g. New York">
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
          <button type="submit" ng-disabled="form.$invalid" class="btn btn-primary btn-block" id="btnsubmit" ng-click="insert_video()" accesskey="u"><u><b>A</b></u>dd Video</button>
      </div>
      <br>
      <div id="result" class="pull-left"></div>
 </form>
</div>

<div class="col-sm-8 gallery">
    <div class="input-group custom">
        <div class="input-group-addon info">?</div>
	     <input type="text" class="form-control" ng-model="search_text" placeholder="Search here...">
	</div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-sm-4 col-xs-6" dir-paginate="x in datadb | filter: search_text | itemsPerPage: 6" style="height:260px"  paginate-id="gallery">
    <div style="margin-bottom: 20px; border: 1px solid #ddd; padding: 5px; background: #fff;">
        <div style="font-size:10px;margin-bottom:4px;">
            <span class="label label-success" ng-if="x.status=='1' || x.status==1">Show</span>
            <span class="label label-default" ng-if="x.status=='0' || x.status==0">Hide</span>
            <span class="label label-info" ng-if="x.city">{{x.city}}</span>
        </div>
        <iframe ng-src="{{x.video_url | trustAsResourceUrl}}" style="width:100%;height:140px;border:none;"></iframe>
        <div style="margin-top: 5px; display: flex; justify-content: space-between;">
            <button class="btn btn-xs btn-danger" ng-click="delete_data(x)"><i class="fa fa-trash"></i> Delete</button>
            <button class="btn btn-xs btn-warning" ng-click="edit_data(x)"><i class="fa fa-pencil"></i> Edit</button>
            <button class="btn btn-xs btn-info" ng-click="toggle_status(x)"><i class="fa fa-eye"></i> {{(x.status=='1' || x.status==1) ? 'Hide' : 'Show'}}</button>
        </div>
    </div>
    </div>
    <div class="col-sm-12">
        <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="<?=site_url('app/pagination')?>" paginate-id="gallery"></dir-pagination-controls>
    </div>
</div>
