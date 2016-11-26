<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dick Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Create form
    'add'                 => 'Thêm',
    'back_to_all'         => 'Back to all ',
    'cancel'              => 'Hủy',
    'add_a_new'           => 'Thêm mới ',

        // Create form - advanced options
        'after_saving'            => 'Sau khi lưu',
        'go_to_the_table_view'    => 'đến bảng xem dữ liệu',
        'let_me_add_another_item' => 'để tôi thêm một phần tử khác',
        'edit_the_new_item'       => 'chỉnh sửa phần tử vừa thêm',

    // Edit form
    'edit'                 => 'Sửa',
    'save'                 => 'Lưu',

    // Revisions
    'revisions'            => 'Revisions',
    'no_revisions'         => 'No revisions found',
    'created_this'          => 'created this',
    'changed_the'          => 'changed the',
    'restore_this_value'   => 'Restore this value',
    'from'                 => 'from',
    'to'                   => 'to',
    'undo'                 => 'Undo',
    'revision_restored'    => 'Revision successfully restored',

    // CRUD table view
    'all'                       => 'Tất cả ',
    'in_the_database'           => 'trong cơ sở dữ liệu',
    'list'                      => 'Danh sách',
    'actions'                   => 'Hành động',
    'preview'                   => 'Preview',
    'delete'                    => 'Xóa',
    'admin'                     => 'Admin',
    'details_row'               => 'This is the details row. Modify as you please.',
    'details_row_loading_error' => 'There was an error loading the details. Please retry.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Are you sure you want to delete this item?',
        'delete_confirmation_title'                   => 'Item Deleted',
        'delete_confirmation_message'                 => 'The item has been deleted successfully.',
        'delete_confirmation_not_title'               => 'NOT deleted',
        'delete_confirmation_not_message'             => "There's been an error. Your item might not have been deleted.",
        'delete_confirmation_not_deleted_title'       => 'Not deleted',
        'delete_confirmation_not_deleted_message'     => 'Nothing happened. Your item is safe.',

        // DataTables translation
        'emptyTable'     => 'No data available in table',
        'info'           => 'Showing _START_ to _END_ of _TOTAL_ entries',
        'infoEmpty'      => 'Showing 0 to 0 of 0 entries',
        'infoFiltered'   => '(filtered from _MAX_ total entries)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ records per page',
        'loadingRecords' => 'Loading...',
        'processing'     => 'Processing...',
        'search'         => 'Search: ',
        'zeroRecords'    => 'No matching records found',
        'paginate'       => [
            'first'    => 'First',
            'last'     => 'Last',
            'next'     => 'Next',
            'previous' => 'Previous',
        ],
        'aria' => [
            'sortAscending'  => ': activate to sort column ascending',
            'sortDescending' => ': activate to sort column descending',
        ],

    // global crud - errors
    'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
    'please_fix' => 'Please fix the following errors:',

    // global crud - success / error notification bubbles
    'insert_success' => 'The item has been added successfully.',
    'update_success' => 'The item has been modified successfully.',

    // CRUD reorder view
    'reorder'                      => 'Reorder',
    'reorder_text'                 => 'Use drag&drop to reorder.',
    'reorder_success_title'        => 'Hoàn thành',
    'reorder_success_message'      => 'Your order has been saved.',
    'reorder_error_title'          => 'Lỗi',
    'reorder_error_message'        => 'Your order has not been saved.',

    // CRUD yes/no
    'yes' => 'Có',
    'no' => 'Không',

    // Fields
    'browse_uploads' => 'Browse uploads',
    'clear' => 'Clear',
    'page_link' => 'Page link',
    'page_link_placeholder' => 'http://example.com/your-desired-page',
    'internal_link' => 'Internal link',
    'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link' => 'External link',
    'choose_file' => 'Choose file',

    //Table field
    'table_cant_add' => 'Cannot add new :entity',
    'table_max_reached' => 'Maximum number of :max reached',

];
