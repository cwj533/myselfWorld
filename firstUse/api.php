<?php
/**
 * 兼容原始api 接口请求
 * @author libo15
 * @version $Id$
 */
class Action_Api extends Aps_BaseAction{

	public function execute(){

		try {

			$this->_getParams();
			$this->_checkParams();

			
			$res = $this->_createPageService('Index_Api')->execute($this->_http_params);
			$this->success($res);

		} catch (Exception $e) {
			return $this->error($e->getCode(),$e->getMessage());
		}
	}
}