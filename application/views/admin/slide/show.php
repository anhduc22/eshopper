
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Slideshow<small>show all slide on your site</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" onchange="ajaxTest(this.value);" id="test" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default"  type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List slideshow</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th><input type="checkbox" id="check-all" class="flat"></th>
                                <th class="column-title">STT</th>
                                <th class="column-title">Title</th>
                                <th class="column-title">Image</th>
                                <th class="column-title">Position</th>
                                <th class="column-title">Publish</th>
                                <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">
                                        Bulk Actions (<span class="action-cnt"> </span>)
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $stt = 0; ?>
                            <?php if (isset($list) && count($list) > 0) :
                                foreach ($list as $item) : $stt++;
                                    ?>
                                    <tr class="pointer <?php echo ($stt % 2 != 0) ? 'even' : 'old'; ?>">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=""><?php echo $stt; ?></td>
                                        <td class=""><?php echo $item['title']; ?></td>
                                        <td class="">
                                            <img src="<?php echo base_url('upload/' . $item['image']); ?>"
                                                 alt="<?php echo $item['title']; ?>">
                                        </td>
                                        <td class=""><?php echo $item['position']; ?></td>
                                        <td class="a-right">
                                            <?php echo ($item['publish'] == 0) ? 'Hidden' : 'Show'; ?>
                                        </td>
                                        <td class=" last"><a href="#">Edit</a></td>
                                        <td class=" last"><a href="#">Delete</a></td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-toolbar pull-right">
                        <?php echo $pagination; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer content -->
    <footer>
        <div class="copyright-info">
            <p class="pull-right">E-shopper Admin - Bootstrap Admin Template by <a href="#">Anh Đức</a>
            </p>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->

</div>
<!-- /page content -->