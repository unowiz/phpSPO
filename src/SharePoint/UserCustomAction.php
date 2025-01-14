<?php

/**
 * This file was generated by phpSPO model generator 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ResourcePath;

/**
 * Specifies 
 * a custom 
 * action.
 */
class UserCustomAction extends BaseEntity
{
    /**
     * The unique 
     * identifier of the client-side component associated with this custom action.
     * @return string
     */
    public function getClientSideComponentId()
    {
        return $this->getProperty("ClientSideComponentId");
    }
    /**
     * The unique 
     * identifier of the client-side component associated with this custom action.
     * @var string
     */
    public function setClientSideComponentId($value)
    {
        $this->setProperty("ClientSideComponentId", $value, true);
    }
    /**
     * This 
     * property is only used when a ClientSideComponentId is specified. It is 
     * optional. If non-empty, the string MUST contain a JSON object with custom 
     * initialization properties whose format and meaning are defined by the 
     * client-side component.
     * @return string
     */
    public function getClientSideComponentProperties()
    {
        return $this->getProperty("ClientSideComponentProperties");
    }
    /**
     * This 
     * property is only used when a ClientSideComponentId is specified. It is 
     * optional. If non-empty, the string MUST contain a JSON object with custom 
     * initialization properties whose format and meaning are defined by the 
     * client-side component.
     * @var string
     */
    public function setClientSideComponentProperties($value)
    {
        $this->setProperty("ClientSideComponentProperties", $value, true);
    }
    /**
     * Specifies 
     * an implementation-specific XML fragment that 
     * determines user interface properties of the custom action.It MUST be 
     * an XML fragment.
     * @return string
     */
    public function getCommandUIExtension()
    {
        if (!$this->isPropertyAvailable("CommandUIExtension")) {
            return null;
        }
        return $this->getProperty("CommandUIExtension");
    }
    /**
     * Specifies 
     * an implementation-specific XML fragment that 
     * determines user interface properties of the custom action.It MUST be 
     * an XML fragment.
     * @var string
     */
    public function setCommandUIExtension($value)
    {
        $this->setProperty("CommandUIExtension", $value, true);
    }
    /**
     * Specifies 
     * the description for the custom action. 
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("Description");
    }
    /**
     * Specifies 
     * the description for the custom action. 
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * Specifies 
     * an implementation-specific value that determines the position of the custom 
     * action on the page.
     * @return string
     */
    public function getGroup()
    {
        return $this->getProperty("Group");
    }
    /**
     * Specifies 
     * an implementation-specific value that determines the position of the custom 
     * action on the page.
     * @var string
     */
    public function setGroup($value)
    {
        $this->setProperty("Group", $value, true);
    }
    /**
     * @return string
     */
    public function getHostProperties()
    {
        return $this->getProperty("HostProperties");
    }
    /**
     * @var string
     */
    public function setHostProperties($value)
    {
        $this->setProperty("HostProperties", $value, true);
    }
    /**
     * The unique 
     * identifier of the client-side component associated with this custom action.
     * @return string
     */
    public function getId()
    {
        return $this->getProperty("Id");
    }
    /**
     * The unique 
     * identifier of the client-side component associated with this custom action.
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * for the icon of the custom action.It MUST be 
     * NULL, a server-relative URL, 
     * or an absolute URL.
     * @return string
     */
    public function getImageUrl()
    {
        return $this->getProperty("ImageUrl");
    }
    /**
     * Specifies 
     * the URL 
     * for the icon of the custom action.It MUST be 
     * NULL, a server-relative URL, 
     * or an absolute URL.
     * @var string
     */
    public function setImageUrl($value)
    {
        $this->setProperty("ImageUrl", $value, true);
    }
    /**
     * Specifies 
     * an implementation-specific value that determines which pages display the custom 
     * action.
     * @return string
     */
    public function getLocation()
    {
        return $this->getProperty("Location");
    }
    /**
     * Specifies 
     * an implementation-specific value that determines which pages display the custom 
     * action.
     * @var string
     */
    public function setLocation($value)
    {
        $this->setProperty("Location", $value, true);
    }
    /**
     * Specifies 
     * the name of the custom action.
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("Name");
    }
    /**
     * Specifies 
     * the name of the custom action.
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the object (1) 
     * associated with the custom action. It 
     * MUST be a list identifier or list 
     * template if RegistrationType is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.List. 
     * It MUST be a content type identifier 
     * if RegistrationType is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.ContentType. 
     * It MUST be a ProgID if RegistrationType 
     * is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.ProgId. 
     * It MUST be a file extension if RegistrationType 
     * is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.FileType.
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->getProperty("RegistrationId");
    }
    /**
     * Specifies 
     * the identifier of the object (1) 
     * associated with the custom action. It 
     * MUST be a list identifier or list 
     * template if RegistrationType is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.List. 
     * It MUST be a content type identifier 
     * if RegistrationType is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.ContentType. 
     * It MUST be a ProgID if RegistrationType 
     * is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.ProgId. 
     * It MUST be a file extension if RegistrationType 
     * is Microsoft.SharePoint.Client.UserCustomActionRegistrationType.FileType.
     * @var string
     */
    public function setRegistrationId($value)
    {
        $this->setProperty("RegistrationId", $value, true);
    }
    /**
     * Specifies 
     * the type of object (1) 
     * associated with the custom action. It 
     * MUST be a list if the RegistrationId 
     * is a list 
     * identifier or list template. It 
     * MUST be ContentType if the RegistrationId is a content 
     * type identifier. It MUST be ProgID if the RegistrationId is a 
     * ProgID. 
     * It MUST be FileType if the RegistrationId is a file extension.
     * @return integer
     */
    public function getRegistrationType()
    {
        return $this->getProperty("RegistrationType");
    }
    /**
     * Specifies 
     * the type of object (1) 
     * associated with the custom action. It 
     * MUST be a list if the RegistrationId 
     * is a list 
     * identifier or list template. It 
     * MUST be ContentType if the RegistrationId is a content 
     * type identifier. It MUST be ProgID if the RegistrationId is a 
     * ProgID. 
     * It MUST be FileType if the RegistrationId is a file extension.
     * @var integer
     */
    public function setRegistrationType($value)
    {
        $this->setProperty("RegistrationType", $value, true);
    }
    /**
     * Specifies 
     * the permissions 
     * needed for the custom action.It MUST 
     * NOT be NULL. 
     * @return BasePermissions
     */
    public function getRights()
    {
        return $this->getProperty("Rights", new BasePermissions());
    }
    /**
     * Specifies 
     * the permissions 
     * needed for the custom action.It MUST 
     * NOT be NULL. 
     * @var BasePermissions
     */
    public function setRights($value)
    {
        $this->setProperty("Rights", $value, true);
    }
    /**
     * Specifies 
     * the scope of the custom action.
     * @return integer
     */
    public function getScope()
    {
        if (!$this->isPropertyAvailable("Scope")) {
            return null;
        }
        return $this->getProperty("Scope");
    }
    /**
     * Specifies 
     * the scope of the custom action.
     * @var integer
     */
    public function setScope($value)
    {
        $this->setProperty("Scope", $value, true);
    }
    /**
     * Specifies 
     * the [ECMA-262-1999] 
     * script to be executed when the custom action is 
     * performed. It MUST be NULL if Location is not "ScriptLink".
     * @return string
     */
    public function getScriptBlock()
    {
        if (!$this->isPropertyAvailable("ScriptBlock")) {
            return null;
        }
        return $this->getProperty("ScriptBlock");
    }
    /**
     * Specifies 
     * the [ECMA-262-1999] 
     * script to be executed when the custom action is 
     * performed. It MUST be NULL if Location is not "ScriptLink".
     * @var string
     */
    public function setScriptBlock($value)
    {
        $this->setProperty("ScriptBlock", $value, true);
    }
    /**
     * Specifies 
     * the URI 
     * of a file 
     * that contains the [ECMA-262-1999] 
     * script to execute on the page. It MUST be NULL if Location is not 
     * "ScriptLink". It MUST be 
     * NULL, or a server-relative URL.
     * @return string
     */
    public function getScriptSrc()
    {
        if (!$this->isPropertyAvailable("ScriptSrc")) {
            return null;
        }
        return $this->getProperty("ScriptSrc");
    }
    /**
     * Specifies 
     * the URI 
     * of a file 
     * that contains the [ECMA-262-1999] 
     * script to execute on the page. It MUST be NULL if Location is not 
     * "ScriptLink". It MUST be 
     * NULL, or a server-relative URL.
     * @var string
     */
    public function setScriptSrc($value)
    {
        $this->setProperty("ScriptSrc", $value, true);
    }
    /**
     * Specifies 
     * an implementation-specific value that determines the order of the custom 
     * action that appears on the page. Its value MUST be equal to or greater than 0. Its value MUST 
     * be equal to or less than 65536. 
     * @return integer
     */
    public function getSequence()
    {
        if (!$this->isPropertyAvailable("Sequence")) {
            return null;
        }
        return $this->getProperty("Sequence");
    }
    /**
     * Specifies 
     * an implementation-specific value that determines the order of the custom 
     * action that appears on the page. Its value MUST be equal to or greater than 0. Its value MUST 
     * be equal to or less than 65536. 
     * @var integer
     */
    public function setSequence($value)
    {
        $this->setProperty("Sequence", $value, true);
    }
    /**
     * Specifies 
     * the display 
     * name for the custom action. 
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Specifies 
     * the display 
     * name for the custom action. 
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * for the icon of the custom action.It MUST be 
     * NULL, a server-relative URL, 
     * or an absolute URL.
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty("Url");
    }
    /**
     * Specifies 
     * the URL 
     * for the icon of the custom action.It MUST be 
     * NULL, a server-relative URL, 
     * or an absolute URL.
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * Specifies 
     * an implementation-specific version identifier. It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getVersionOfUserCustomAction()
    {
        return $this->getProperty("VersionOfUserCustomAction");
    }
    /**
     * Specifies 
     * an implementation-specific version identifier. It MUST 
     * NOT be NULL. 
     * @var string
     */
    public function setVersionOfUserCustomAction($value)
    {
        $this->setProperty("VersionOfUserCustomAction", $value, true);
    }
    /**
     * @return UserResource
     */
    public function getDescriptionResource()
    {
        return $this->getProperty("DescriptionResource",
            new UserResource($this->getContext(),
                new ResourcePath("DescriptionResource", $this->getResourcePath())));
    }
    /**
     * @return UserResource
     */
    public function getTitleResource()
    {
        return $this->getProperty("TitleResource",
            new UserResource($this->getContext(),new ResourcePath("TitleResource", $this->getResourcePath())));
    }
}