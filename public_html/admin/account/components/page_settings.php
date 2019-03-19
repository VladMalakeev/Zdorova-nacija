<script src="account/ajax/page_queries.js"></script>
<div class="contentBlock">
    <form id="settings_form">

        <div id="page_header">
            <input  type="text" name="header" maxlength="255" placeholder="Назва сторінки">
            <select name="header_size">
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="20">20</option>
                <option value="22">22</option>
                <option value="24">26</option>
                <option value="28">28</option>
                <option value="32">32</option>
                <option value="36">36</option>
                <option value="42">42</option>
                <option value="42">48</option>
                <option value="72">72</option>
            </select>
            <select name="header_style">
                <option value="default">обычно</option>
                <option value="cursive">курсив</option>
                <option value="bold">жирный</option>
                <option value="underline">подчеркнутый</option>
            </select>
        </div>

        <div id="page_text">
          <textarea  id="input_text" name="page_text" placeholder="Опис сторінки"></textarea>
        </div>
        <script>var editor = new Jodit('#input_text');</script>

        <div class="field">
            <input type="text"  maxlength="255" name="description" placeholder="Короткий опис сторінки">
        </div>

        <div class="field">
            <input type="text" maxlength="255" name="keywords" placeholder="Ключові слова, через кому">
        </div>
        <input type="hidden" name="page_id" value="<? echo $page['id'] ?>">
        <input class="save btn btn-success" type="button" onclick="savePageSettings(this.form)" value="Зберегти">
        <script>initializePageData()</script>
    </form>
</div>