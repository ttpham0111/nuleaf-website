<div class="form-group">
  <label for="title">Title</label>
  <input class="form-control" id="title" data-html-entities="true" maxlength="100" name="title" placeholder="Steminar Title" type="text" />
  <span class="error-message" data-input="#title"></span>
</div>
<div class="form-group">
  <label for="location">Location</label>
  <input class="form-control" id="location" maxlength="100" name="location" placeholder="Steminar Location" type="text" />
  <span class="error-message" data-input="#location"></span>
</div>
<div class="form-group">
  <label for="date">Date</label>
  <div class="date hidden-md hidden-lg input-group mobile">
    <span class="input-group-addon">
      <i class="glyphicon glyphicon-calendar"></i>
    </span>
    <input class="form-control" id="date_mobile" name="date" placeholder="Steminar Date" readonly type="text" />
  </div>
  <span class="error-message hidden-md hidden-lg" data-input="#date_mobile"></span>

  <input class="date hidden-xs hidden-sm form-control" id="date" name="date" maxlength="19" placeholder="Steminar Date" type="text" />
  <span class="error-message hidden-xs hidden-sm" data-input="#date"></span>
</div>
<div class="form-group">
  <label for="body">Body</label>
  <textarea id="body" name="body"></textarea>
  <span class="error-message" data-input="#body"></span>
</div>