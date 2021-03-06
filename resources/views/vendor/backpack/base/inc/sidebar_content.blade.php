<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ backpack_url('contact') }}'><i class='fa fa-user'></i><span>Contacts</span></a></li>
<li><a href='{{ backpack_url('stage') }}'><i class='fa fa-adjust'></i><span>Stages</span></a></li>

<li>
    <a href="{{ backpack_url('company') }}">
        <i class="fa fa-question"></i><span>{{ trans('models.company.plural') }}</span>
    </a>
</li>
<li>
    <a href="{{ backpack_url('project') }}">
        <i class="fa fa-question"></i><span>{{ trans('models.project.plural') }}</span>
    </a>
</li>