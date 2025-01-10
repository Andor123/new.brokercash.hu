<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListFolders. This operation is only applicable to a
 * hierarchical namespace enabled bucket.
 *
 * Generated from protobuf message <code>google.storage.control.v2.ListFoldersRequest</code>
 */
class ListFoldersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the bucket in which to look for folders. The bucket must
     * be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of folders to return in a single response. The
     * service will use this parameter or 1,000 items, whichever is smaller.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A previously-returned page token representing part of the larger
     * set of results to view.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Filter results to folders whose names begin with this prefix.
     * If set, the value must either be an empty string or end with a '/'.
     *
     * Generated from protobuf field <code>string prefix = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $prefix = '';
    /**
     * Optional. If set, returns results in a directory-like mode. The results
     * will only include folders that either exactly match the above prefix, or
     * are one level below the prefix. The only supported value is '/'.
     *
     * Generated from protobuf field <code>string delimiter = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $delimiter = '';
    /**
     * Optional. Filter results to folders whose names are lexicographically equal
     * to or after lexicographic_start. If lexicographic_end is also set, the
     * folders listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_start = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $lexicographic_start = '';
    /**
     * Optional. Filter results to folders whose names are lexicographically
     * before lexicographic_end. If lexicographic_start is also set, the folders
     * listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_end = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $lexicographic_end = '';
    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string $parent Required. Name of the bucket in which to look for folders. The bucket must
     *                       be a hierarchical namespace enabled bucket. Please see
     *                       {@see StorageControlClient::bucketName()} for help formatting this field.
     *
     * @return \Google\Cloud\Storage\Control\V2\ListFoldersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the bucket in which to look for folders. The bucket must
     *           be a hierarchical namespace enabled bucket.
     *     @type int $page_size
     *           Optional. Maximum number of folders to return in a single response. The
     *           service will use this parameter or 1,000 items, whichever is smaller.
     *     @type string $page_token
     *           Optional. A previously-returned page token representing part of the larger
     *           set of results to view.
     *     @type string $prefix
     *           Optional. Filter results to folders whose names begin with this prefix.
     *           If set, the value must either be an empty string or end with a '/'.
     *     @type string $delimiter
     *           Optional. If set, returns results in a directory-like mode. The results
     *           will only include folders that either exactly match the above prefix, or
     *           are one level below the prefix. The only supported value is '/'.
     *     @type string $lexicographic_start
     *           Optional. Filter results to folders whose names are lexicographically equal
     *           to or after lexicographic_start. If lexicographic_end is also set, the
     *           folders listed have names between lexicographic_start (inclusive) and
     *           lexicographic_end (exclusive).
     *     @type string $lexicographic_end
     *           Optional. Filter results to folders whose names are lexicographically
     *           before lexicographic_end. If lexicographic_start is also set, the folders
     *           listed have names between lexicographic_start (inclusive) and
     *           lexicographic_end (exclusive).
     *     @type string $request_id
     *           Optional. A unique identifier for this request. UUID is the recommended
     *           format, but other formats are still accepted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the bucket in which to look for folders. The bucket must
     * be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the bucket in which to look for folders. The bucket must
     * be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of folders to return in a single response. The
     * service will use this parameter or 1,000 items, whichever is smaller.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of folders to return in a single response. The
     * service will use this parameter or 1,000 items, whichever is smaller.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A previously-returned page token representing part of the larger
     * set of results to view.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A previously-returned page token representing part of the larger
     * set of results to view.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter results to folders whose names begin with this prefix.
     * If set, the value must either be an empty string or end with a '/'.
     *
     * Generated from protobuf field <code>string prefix = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Optional. Filter results to folders whose names begin with this prefix.
     * If set, the value must either be an empty string or end with a '/'.
     *
     * Generated from protobuf field <code>string prefix = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->prefix = $var;

        return $this;
    }

    /**
     * Optional. If set, returns results in a directory-like mode. The results
     * will only include folders that either exactly match the above prefix, or
     * are one level below the prefix. The only supported value is '/'.
     *
     * Generated from protobuf field <code>string delimiter = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Optional. If set, returns results in a directory-like mode. The results
     * will only include folders that either exactly match the above prefix, or
     * are one level below the prefix. The only supported value is '/'.
     *
     * Generated from protobuf field <code>string delimiter = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDelimiter($var)
    {
        GPBUtil::checkString($var, True);
        $this->delimiter = $var;

        return $this;
    }

    /**
     * Optional. Filter results to folders whose names are lexicographically equal
     * to or after lexicographic_start. If lexicographic_end is also set, the
     * folders listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_start = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLexicographicStart()
    {
        return $this->lexicographic_start;
    }

    /**
     * Optional. Filter results to folders whose names are lexicographically equal
     * to or after lexicographic_start. If lexicographic_end is also set, the
     * folders listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_start = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLexicographicStart($var)
    {
        GPBUtil::checkString($var, True);
        $this->lexicographic_start = $var;

        return $this;
    }

    /**
     * Optional. Filter results to folders whose names are lexicographically
     * before lexicographic_end. If lexicographic_start is also set, the folders
     * listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_end = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLexicographicEnd()
    {
        return $this->lexicographic_end;
    }

    /**
     * Optional. Filter results to folders whose names are lexicographically
     * before lexicographic_end. If lexicographic_start is also set, the folders
     * listed have names between lexicographic_start (inclusive) and
     * lexicographic_end (exclusive).
     *
     * Generated from protobuf field <code>string lexicographic_end = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLexicographicEnd($var)
    {
        GPBUtil::checkString($var, True);
        $this->lexicographic_end = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
