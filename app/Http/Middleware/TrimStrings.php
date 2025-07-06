<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    protected $except = [
        // Semua field yang sudah ada sebelumnya
        'current_password', 'password', 'password_confirmation',
        'roles', 'permissions', 'photo', 'logo', 'image', 'image_path',
        'file', 'files', 'attachment', 'attachments', 'remember',
        'active', 'available', 'published', 'featured', 'status',
        'categories', 'tags', 'options', 'settings', 'meta', 'data',
        'filament_*', 'panel_*', 'selected', 'checked', 'enabled',
        'disabled', 'visible', 'hidden', 'date', 'time', 'datetime',
        'created_at', 'updated_at', 'published_at', 'json', 'config',
        'metadata', 'bulk_actions', 'filters', 'sort', 'search',
        '_token', '_method', 'csrf_token', 'user_id', 'umkm_id',
        'product_id', 'homestay_id', 'uploaded_by', 'related_id',
        'price', 'total_price', 'price_per_night', 'ticket_price',
        'discount', 'stock', 'quantity', 'rating', 'lat', 'lng',
        'category', 'type', 'legal_status', 'description', 'content',
        'address', 'location', 'facilities', 'open_hours', 'contact',
        'phone', 'nik', 'dusun', 'livewire', 'wire:', 'x-data',
        'x-init', 'x-show', 'x-transition', 'form_data', 'form_errors',
        'form_validation', 'table_data', 'table_filters', 'table_sort',
        'table_search', 'action_data', 'action_parameters', 'modal_data',
        'modal_parameters', 'notification_data', 'notification_parameters',
        'page_data', 'page_parameters', 'resource_data', 'resource_parameters',
        'widget_data', 'widget_parameters', 'attributes', 'class', 'style',
        'id', 'name', 'value', 'type', 'placeholder', 'required', 'disabled',
        'readonly', 'autofocus', 'autocomplete', 'pattern', 'min', 'max',
        'step', 'size', 'maxlength', 'minlength', 'multiple', 'accept',
        'capture', 'form', 'formaction', 'formenctype', 'formmethod',
        'formnovalidate', 'formtarget', 'list', 'dirname', 'novalidate',
        'popovertarget', 'popovertargetaction', 'spellcheck', 'wrap',
        'inputmode', 'enterkeyhint', 'autocapitalize', 'autocorrect',
        'autosave', 'results', 'incremental', 'mozactionhint',
        'x-webkit-speech', 'x-webkit-grammar', 'x-webkit-datetime',
        'x-webkit-autosave',
    ];

    protected function transform($key, $value)
    {
        if (is_array($value)) {
            return $value;
        }
        if (!is_string($value)) {
            return $value;
        }
        if (in_array($key, $this->except)) {
            return $value;
        }
        return trim($value);
    }
}
